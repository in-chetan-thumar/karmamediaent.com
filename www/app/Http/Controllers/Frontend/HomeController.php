<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $upcoming_movies = resolve('movie-repo')->activeItemObject(['type' => 'MOVIE', 'start_date' => '', 'end_date' => ''])->where('status','UPCOMING')->take(3);
        $movies = resolve('movie-repo')->filter(['type' => 'MOVIE', 'start_date' => '', 'end_date' => '', 'status' => 'RELEASED', 'release_date'=>'Y', 'is_recent' => 'N' , 'path'=>''])->take(6);
        $webseries = resolve('movie-repo')->activeItemObject(['type' => 'WEBSERIES', 'start_date' => '', 'end_date' => ''])->where('status','RELEASED');
        $news = resolve('news-repo')->activeItemObject(['start_date' => '', 'end_date' => ''])->take(3);

        return view('frontend.index',compact('upcoming_movies','movies', 'webseries', 'news'));
    }
}
