@extends('frontend.layouts.master')
@section('title')
    Karma Media | Home
@endsection

@section('css')

@endsection
@section('section')
    <!-- BEGIN .content-wrapper -->
    <div class="radiusdiv">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($banner_movies as $data)
                <div class="carousel-item @if ($banner_movies->first() == $data) active @endif" data-interval="300">
                        <a
                            href="{{ $data->is_clickable == 'N' ? 'javascript:void(0)' : route('frontend.movie.details', $data->slug) }}">
                            <img src="/{{ $data->banner_image_url }}" alt="Banner Image">
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="carousel-indicators">
                @foreach ($banner_movies as $key => $data)
                    <div class="item active" data-slide-to="{{ $key }}">
                        <img src="/{{ $data->banner_thumbnail_url }}" class="img-fluid"
                            data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" />
                    </div>
                @endforeach
            </div>
            
            
        </div>
        <div class="sliderimg"><img src="{{ asset('assets/frontend/images/slider-bg.png') }}" alt="" /></div>
    </div>
    <!-- home slider div end -->

    <div class="upcoming">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="upcomingleft">
                        <div class="upcheding">
                            <h2>Upcoming</h2>
                        </div>
                        <div class="font14">Lights, Camera, Action</div>
                    </div>
                    <div class="upcomingright">
                        <div class="tabings">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist"> <a class="nav-item nav-link active"
                                        id="nav-movies-tab" data-toggle="tab" href="#nav-movies" role="tab"
                                        aria-controls="nav-movies" aria-selected="true">Movies</a> <a
                                        class="nav-item nav-link" id="nav-webseries-tab" data-toggle="tab"
                                        href="#nav-webseries" role="tab" aria-controls="nav-webseries"
                                        aria-selected="false">Webseries</a> </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-movies" role="tabpanel"
                                    aria-labelledby="nav-movies-tab">
                                    <div class="tumbeslider">
                                        <div class="flexslider-upcoming carousel">
                                            <ul class="slides">
                                                @if (isset($upcoming_movies) and !empty($upcoming_movies->first()))
                                                    @foreach ($upcoming_movies as $data)
                                                        <li>
                                                            <a
                                                                href="{{ $data->is_clickable == 'N' ? 'javascript:void(0)' : route('frontend.movie.details', $data->slug) }}">
                                                                <div class="upcominfo">
                                                                    <img src="/{{ $data->poster_potrait_url }}" />
                                                                    <h2>{{ $data->title }}</h2>
                                                                    <p>Coming Soon</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-webseries" role="tabpanel"
                                    aria-labelledby="nav-webseries-tab">
                                    <div class="tumbeslider">
                                        <div class="flexslider-upcoming carousel">
                                            <ul class="slides">
                                                @if (isset($webseries) and !empty($webseries->first()))
                                                    @foreach ($webseries as $data)
                                                        <li>
                                                            <a
                                                                href="{{ $data->is_clickable == 'N' ? 'javascript:void(0)' : route('frontend.webseries.details', $data->slug) }}">
                                                                <div class="upcominfo">
                                                                    <img src="/{{ $data->poster_potrait_url }}" />
                                                                    <h2>{{ $data->title }}</h2>
                                                                    <p>Coming Soon</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                @endif

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flclear"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- content div start -->
    <div class="contentdiv">
        <div class="container">
            <div class="newsdiv">
                <div class="row">
                    <div class="col-lg-3 order-lg-12">
                        <div class="heading">
                            <h2>News</h2>
                        </div>
                        <div class="font14">Glimpses, Interactions, Announcements</div>
                    </div>
                    <div class="col-lg-9 col-md-order-4">
                        <ul class="newslisting">
                            @if (isset($news) and !empty($news->first()))
                                @foreach ($news as $data)
                                    <li class="animated fadeIn" data-wow-delay=".50s">
                                        <a target="_blank" href="{{ $data->link }}">
                                            <img src="/{{ $data->photo_url }}" alt="News">
                                            <h2>{{ $data->title }}</h2>

                                            <span class="bluelink">Read More</span>
                                        </a>
                                    </li>
                                @endforeach
                            @endif

                        </ul>
                        <div class="flclear"></div>
                        <div class="float-right"><a href="{{ route('frontend.news') }}" class="borderbtn">view
                                all</a></div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    @component('frontend.components.contact_us')
    @endcomponent
    <!-- content div end -->

    <!-- footer div start -->
    @component('frontend.components.footer')
    @endcomponent
    <!-- footer div end -->
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails",
                animationLoop: true,
            });

            itemWidth = 155;
            if ($(window).width() < 425) {
                itemWidth = 300;
            }

            initializeUpcomingFlexslider();

            $('#nav-tab a').on('click', function(e) {
                e.preventDefault();
                setTimeout(function() {
                    $(window).trigger('resize');
                }, 0);
            });

            $(window).on('resize', function() {
                setTimeout(function() {
                    $('.flexslider-upcoming').data('flexslider').resize();
                }, 0);
            });

            /* Add map's height to parent div */
            $('.text1').css('height', $('#map').height());
            $('#map').fadeIn(2000);

        });

        function initializeUpcomingFlexslider() {
            $('.flexslider-upcoming').flexslider({
                animation: "slide",
                animationLoop: true,
                itemWidth: itemWidth,
                itemMargin: 20,
                maxItems: 5
            });
        }

        // Initialize and add the map
        function initMap() {
            var mumbai = {
                lat: 19.1414835,
                lng: 72.8333595
            };
            var atlanta = {
                lat: 33.750680,
                lng: -84.364400
            };

            var mapOptions = {
                zoom: 15,
                center: mumbai
            }
            map = new google.maps.Map(
                document.getElementById('map'), mapOptions);

            addMarker(mumbai, map);
            addMarker(atlanta, map);
        }

        // Adds a marker to the map.
        function addMarker(latlong, map) {
            var marker = new google.maps.Marker({
                position: latlong,
                map: map,
                icon: "{{asset('assets/frontend/images/location-logo.png')}}"
            });

            google.maps.event.addListener(marker, 'click', function() {
                map.setZoom(15);
                map.setCenter(marker.getPosition());
            });
        }

        function highlightLocationOnMap(element, lat, long) {
            $('.show-on-map').removeClass('active');
            $(element).addClass('active');
            $('#map').hide();
            var latlong = new google.maps.LatLng(lat, long);
            $('#map').fadeIn(2000);
            map.setCenter(latlong);

        }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOvcK9RAUc_PQm4Ue3SbSWO9aEz5pK1F0&callback=initMap"></script>
@endsection
