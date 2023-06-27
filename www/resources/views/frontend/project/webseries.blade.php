@extends('frontend.layouts.master')
@section('title')
    Karma Media | Webseries
@endsection

@section('section')
    <!-- content div start -->
    <div class="contentdiv">
        <div class="movies-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>webseries</h2>
                        </div>


                        <div class="heading">
                            <h3>Upcoming</h3>
                        </div>
                        <div class="moviesslider">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="4" class=""></li>
                                </ol>
                                <div class="carousel-inner" data-interval="300">
                                    @if (isset($upcoming_webseries) and !empty($upcoming_webseries->first()))
                                        @foreach ($upcoming_webseries as $webseries)
                                            <div class="carousel-item @if ($upcoming_webseries->first() == $webseries) active @endif">

                                                <a href="{{ $webseries->is_clickable == 'N' ? 'javascript:void(0)' : route('frontend.webseries.details',$webseries->slug) }}">
                                                    <img class="d-block w-100" src="{{ $webseries->poster_landscape_url }}"
                                                        alt="Slider Image">
                                                </a>
                                            </div>
                                        @endforeach
                                    @else
                                     <h1> No data available</h1>
                                    @endif
                                </div>
                            </div>
                        </div>

                        @if (!empty($recent_webseries->first()))
                        <div class="recentdiv">
                            <div class="heading">
                                <h3>Recent</h3>
                            </div>
                            <div class="tworowdiv">
                                <ul>
                                    @foreach ($recent_webseries as $webseries)
                                        <li class="animated flipInX" data-wow-delay=".50s">
                                            <a
                                                href="{{ $webseries->is_clickable == 'N' ? 'javascript:void(0)' : route('frontend.webseries.details',$webseries->slug) }}">
                                                <img src="{{ $webseries->poster_landscape_url }}" />
                                                <span class="moviename">{{ $webseries->title }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="flclear"></div>
                            </div>
                        </div>
                    @endif



                    {{-- @if (!empty($all_webseries->first()))
                        <div class="released">
                            <div class="heading">
                                <h3>Released</h3>
                            </div>
                            <div class="fourrowdiv">
                                <ul id="released_movies_block">

                                    @foreach ($all_webseries as $webseries)
                                        <li class="animated fadeIn" data-wow-delay="1.25s">
                                            <a
                                                href="{{ $webseries->is_clickable == 'N' ? 'javascript:void(0)' : route('frontend.webseries.details',$webseries->slug) }}">
                                                <img src="{{ $webseries->poster_potrait_url }}" />
                                                <span class="moviename">{{ $webseries->title }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="flclear"></div>
                            </div>
                            <div class="mt-4 text-center view_more_block">
                                <a href="javascript:void(0);" class="blueborderbtn view_more" next-page="2">view
                                    more</a>
                            </div>
                        </div>
                    @endif --}}


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content div end -->
@endsection
