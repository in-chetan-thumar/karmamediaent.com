<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class WebseriesController extends Controller
{
    public function index(Request $request, $slug=''){

        $params = $this->getParamsForFilter($request) ;
        $page = $request->page ?? null;
        $webseries = resolve('movie-repo')->activeItemObject($params);
        $upcoming_webseries = $webseries->where('status','RELEASED') ;
        $recent_webseries = $webseries->where('is_recent','Y')->take(4) ;
        $params['status'] =  'RELEASED' ;
        $params['is_recent'] =  'N' ;
        $all_webseries = resolve('movie-repo')->filter($params);
        
        if (!empty($page)) {
            $data = [
                'view' => '',
            ];
            $data['current_page'] = $all_webseries->currentPage();
            $data['last_page'] = $all_webseries->lastPage();
            foreach ($all_webseries as $webseries) {
                $data['view'] .= '<li class="animated fadeIn" data-wow-delay="1.25s">
                <a href="' . ($webseries->is_clickable == 'N' ? 'javascript:void(0)' : '') . '">
                    <img
                        src="' . $webseries->poster_potrait_url . '" />
                    <span class="moviename">' . $webseries->title . '</span>
                </a>
            </li>';
            }
            return response()->json($data);
        }

        if(Route::current()->getName() == 'frontend.webseries.details'){
            if(!empty($slug)){
                $webseries_details = resolve('movie-repo')->findBySlug($slug);
            }
            return view('frontend.project.webseries_details', compact('webseries_details','all_webseries'));
        }
        
        return view('frontend.project.webseries', compact('upcoming_webseries','recent_webseries','all_webseries'));


    }

    public function getParamsForFilter(Request $request)
    {
        $previousUrl = parse_url(url()->previous());
        $params = [];
        $params['type'] =  'WEBSERIES';

        if (request()->routeIs('webseries.index') || !isset($previousUrl['query'])) {
            $params['query_str'] = $request->query_str ?? '';
            $params['page'] =  $request->page ?? 0;
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
