<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class MovieController extends Controller
{
    public function index(Request $request, $slug='')
    {
        $params = $this->getParamsForFilter($request) ;
        $page = $request->page ?? null;
        $movies = resolve('movie-repo')->activeItemObject($params);
        $upcoming_movies = $movies->where('status','UPCOMING') ;
        $recent_movies = $movies->where('is_recent','Y')->take(4) ;
        $params['status'] =  'RELEASED' ;
        $params['is_recent'] =  'N' ;
        $params['release_date'] =  'Y' ;
        $all_movies = resolve('movie-repo')->filter($params);
        
        if (!empty($page)) {
            $data = [
                'view' => '',
            ];
            $data['current_page'] = $all_movies->currentPage();
            $data['last_page'] = $all_movies->lastPage();
            foreach ($all_movies as $movie) {
                $data['view'] .= '<li class="animated fadeIn" data-wow-delay="1.25s">
                <a href="' . ($movie->is_clickable == 'N' ? 'javascript:void(0)' : route('frontend.movie.details',$movie->slug)) . '">
                    <img
                        src="/' . $movie->poster_potrait_url . '" />
                    <span class="moviename">' . $movie->title . '</span>
                </a>
            </li>';
            }
            return response()->json($data);
        }

        if(Route::current()->getName() == 'frontend.movie.details'){
            if(!empty($slug)){
                $movie = resolve('movie-repo')->findBySlug($slug);
            }
            return view('frontend.project.movie_details', compact('movie','all_movies'));
        }
        
        return view('frontend.project.movie', compact('upcoming_movies','recent_movies','all_movies'));
    }
    

    public function getParamsForFilter(Request $request)
    {
        $previousUrl = parse_url(url()->previous());
        $params = [];

        $params['type'] =  'MOVIE';

        if (request()->routeIs('frontend.movies') || !isset($previousUrl['query'])) {
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

        /* if (!empty($params['start_date']) && !empty($params['end_date'])) {
            $params['start_date'] = Carbon::parse($params['start_date'])->format('Y-m-d 00:00:00');
            $params['end_date'] = Carbon::parse($params['end_date'])->format('Y-m-d 23:59:00');
        } else {
            $params['start_date'] = Carbon::now()->subDays(7)->format('Y-m-d 00:00:00');
            $params['end_date'] = Carbon::now()->format('Y-m-d 23:59:00');
        } */

        return $params;
    }
}
