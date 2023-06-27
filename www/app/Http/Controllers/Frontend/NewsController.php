<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->page ?? null;
        $all_news = resolve('news-repo')->filter($this->getParamsForFilter($request));
        
        if (!empty($page)) {
            $data = [
                'view' => '',
            ];
            $data['current_page'] = $all_news->currentPage() ;
            $data['last_page'] = $all_news->lastPage() ;
             foreach ($all_news as $news) {
                $data['view'] .= '<li>
                    <a target="_blank" href="' . $news->link . '">
                        <img src="' . $news->photo_url . '" alt="News image" />
                        <h2>' . $news->title . '</h2>
                        <span class="bluelink">Read More</span>
                    </a>
                </li>';
            }
            return response()->json($data);
        }
        return view('frontend.news', compact('all_news'));
    }
    

    public function getParamsForFilter(Request $request)
    {
        $previousUrl = parse_url(url()->previous());
        $params = [];

        if (request()->routeIs('frontend.news') || !isset($previousUrl['query'])) {
            $params['query_str'] = $request->query_str ?? '';
            $params['month'] = $request->month ?? '';
            $params['year'] = $request->year ?? '';
            $params['page'] =  $request->page ?? 0;
            $params['data_per_page'] =  8 ;
            $params['is_active'] =  'Y' ;
            $params['start_date'] =  $request->start_date ?? null;
            $params['end_date'] =  $request->end_date ?? null;
            $params['path'] = \Illuminate\Support\Facades\Request::fullUrl();
        } else {
            parse_str($previousUrl['query'], $params);
            $params['path'] =  url()->previous();
        }

        if (!empty($params['start_date']) && !empty($params['end_date'])) {
            $params['start_date'] = Carbon::parse($params['start_date'])->format('Y-m-d 00:00:00');
            $params['end_date'] = Carbon::parse($params['end_date'])->format('Y-m-d 23:59:00');
        } else {
            $params['start_date'] = Carbon::now()->subDays(7)->format('Y-m-d 00:00:00');
            $params['end_date'] = Carbon::now()->format('Y-m-d 23:59:00');
        }

        return $params;
    }
}
