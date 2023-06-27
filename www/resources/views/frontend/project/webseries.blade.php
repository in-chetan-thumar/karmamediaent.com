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
                                    @if (isset($all_webseries) and !empty($all_webseries->first()))
                                        @foreach ($all_webseries as $webseries)
                                            <div class="carousel-item @if ($all_webseries->first() == $webseries) active @endif">

                                                <a href="javascript:;">
                                                    <img class="d-block w-100" src="{{ $webseries->poster_landscape_url }}"
                                                        alt="Slider Image">
                                                </a>
                                            </div>
                                        @endforeach
                                    @else
                                    @endif
                                    {{-- <div class="carousel-item active">
                                        <a href="javascript:;">
                                            <img class="d-block w-100"
                                                src="https://www.karmamediaent.com/storage/app/uploads/public/634/563/003/6345630037ec5507961118.png"
                                                alt="Slider Image">
                                        </a>
                                    </div>
                                    <div class="carousel-item ">
                                        <a href="https://www.karmamediaent.com/webseries/coffee-king">
                                            <img class="d-block w-100"
                                                src="https://www.karmamediaent.com/storage/app/uploads/public/634/d78/6cd/634d786cdee07552858845.png"
                                                alt="Slider Image">
                                        </a>
                                    </div>
                                    <div class="carousel-item ">
                                        <a href="https://www.karmamediaent.com/webseries/tatas">
                                            <img class="d-block w-100"
                                                src="https://www.karmamediaent.com/storage/app/uploads/public/634/d78/e0d/634d78e0d1bb9197788170.png"
                                                alt="Slider Image">
                                        </a>
                                    </div>
                                    <div class="carousel-item ">
                                        <a href="javascript:;">
                                            <img class="d-block w-100"
                                                src="https://www.karmamediaent.com/storage/app/uploads/public/5df/783/08b/5df78308b41ed938625420.jpg"
                                                alt="Slider Image">
                                        </a>
                                    </div>
                                    <div class="carousel-item ">
                                        <a href="javascript:;">
                                            <img class="d-block w-100"
                                                src="https://www.karmamediaent.com/storage/app/uploads/public/5df/782/29d/5df78229d7820023170189.jpg"
                                                alt="Slider Image">
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content div end -->
@endsection
