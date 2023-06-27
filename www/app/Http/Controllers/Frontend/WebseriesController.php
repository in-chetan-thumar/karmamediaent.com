<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WebseriesController extends Controller
{
    public function index(Request $request){
        
        $all_webseries = resolve('movie-repo')->filter($this->getParamsForFilter($request));
        return view('frontend.project.webseries',compact('all_webseries'));
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
