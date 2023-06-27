@extends('frontend.layouts.master')
@section('title')
    Karma Media | Movie detail
@endsection

@section('css')
    <style>
        .gallerysocail img {
            width: 41px;
            height: 42px;
        }
    </style>
@endsection

@section('section')
    <!-- content div start -->
    <div class="radiusdiv">
        <div class="watchnow">
            @if (isset($movie) and !empty($movie->youtube_trailer_link))
                <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalCenter"><img
                        src="{{ asset('assets/frontend/images/watch-now.png') }}" alt="" /></a>
            @endif
        </div>
        <div class="mainimg"> <img src="/{{ $movie->poster_landscape_url }}" alt="" /></div>
        <div class="sliderimg"><img src="{{ asset('assets/frontend/images/slider-bg-gallery.png') }}" alt="" />
        </div>
    </div>
    <!-- home slider div end -->

    <!-- content div start -->
    <div class="contentdiv">
        <div class="trailerbox">
            <div class="trailerbox-top-bg">THEATRICAL TRAILER</div>
            <div class="trailertabs">
                <div class="tabings">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist"> <a class="nav-item nav-link"
                                id="nav-castcrew-tab" data-toggle="tab" href="#nav-castcrew" role="tab"
                                aria-controls="nav-castcrew" aria-selected="true">Cast & Crew</a> <a
                                class="nav-item nav-link active" id="nav-gallery-tab" data-toggle="tab" href="#nav-gallery"
                                role="tab" aria-controls="nav-gallery" aria-selected="false">Gallery</a> </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade" id="nav-castcrew" role="tabpanel" aria-labelledby="nav-castcrew-tab">
                            <div class="row align-items-center">
                                <div class="col-lg-5 marmobbot3">
                                    <div class="text-center"><img src="/{{ $movie->logo_url }}" alt="Logo"
                                            class="img-fluid" /></div>
                                </div>
                                <div class="col-lg-7">
                                    @if (isset($movie))
                                        <ul class="galleryinfo">
                                            @if (!empty($movie->directed_by))
                                                <li>
                                                    <div>Directed By :</div>
                                                    <div class="namewhite">{{ $movie->directed_by }}</div>
                                                </li>
                                            @endif
                                            @if (!empty($movie->produced_by))
                                                <li>
                                                    <div>Produced By :</div>
                                                    <div class="namewhite">{{ $movie->produced_by }}</div>
                                                </li>
                                            @endif
                                            @if (!empty($movie->release_date_front_formatted))
                                                <li>
                                                    <div>Release Date:</div>
                                                    <div class="namewhite">{{ $movie->release_date_front_formatted }}</div>
                                                </li>
                                            @endif
                                            @if (!empty($movie->main_cast))
                                                <li>
                                                    <div>Main Cast:</div>
                                                    <div class="namewhite">{{ $movie->main_cast }}</div>
                                                </li>
                                            @endif
                                        </ul>
                                        <ul class="gallerysocail">

                                            @if (!empty($movie->facebook))
                                                <li><a target="_blank" href="{{ $movie->facebook }}"><img
                                                            src="{{ asset('assets/frontend/images/facebook.png') }}"
                                                            alt="facebook" /></a></li>
                                            @endif
                                            @if (!empty($movie->instagram))
                                                <li><a target="_blank" href="{{ $movie->instagram }}"><img
                                                            src="{{ asset('assets/frontend/images/instagram.png') }}"
                                                            alt="instagram" /></a></li>
                                            @endif
                                            @if (!empty($movie->youtube))
                                                <li><a target="_blank" href="{{ $movie->youtube }}"><img
                                                            src="{{ asset('assets/frontend/images/youtube.png') }}"
                                                            alt="youtube" /></a></li>
                                            @endif
                                            @if (!empty($movie->twitter))
                                                <li><a target="_blank" href="{{ $movie->twitter }}"><img
                                                            src="{{ asset('assets/frontend/images/twitter.png') }}"
                                                            alt="twitter" /></a></li>
                                            @endif
                                            @if (!empty($movie->amazon_prime))
                                                <li><a target="_blank" href="{{ $movie->amazon_prime }}"><img
                                                            src="{{ asset('assets/frontend/images/amazon_prime.png') }}"
                                                            alt="amazon prime" /></a></li>
                                            @endif
                                            @if (!empty($movie->netflix))
                                                <li><a target="_blank" href="{{ $movie->netflix }}"><img
                                                            src="{{ asset('assets/frontend/images/netflix.png') }}"
                                                            alt="netflix" /></a></li>
                                            @endif
                                            @if (!empty($movie->zee5))
                                                <li><a target="_blank" href="{{ $movie->zee5 }}"><img
                                                            src="{{ asset('assets/frontend/images/zee5.png') }}"
                                                            alt="zee5" /></a></li>
                                            @endif

                                            @if (!empty($movie->hotstar))
                                                <li><a target="_blank" href="{{ $movie->hotstar }}"><img
                                                            src="{{ asset('assets/frontend/images/hotstar.png') }}"
                                                            alt="hotstar" /></a></li>
                                            @endif
                                            @if (!empty($movie->alt_balaji))
                                                <li><a target="_blank" href="{{ $movie->alt_balaji }}"><img
                                                            src="{{ asset('assets/frontend/images/alt_balaji.png') }}"
                                                            alt="alt balaji" /></a></li>
                                            @endif
                                            @if (!empty($movie->eros_now))
                                                <li><a target="_blank" href="{{ $movie->eros_now }}"><img
                                                            src="{{ asset('assets/frontend/images/eros_now.png') }}"
                                                            alt="eros now" /></a></li>
                                            @endif
                                            @if (!empty($movie->mx_player))
                                                <li><a target="_blank" href="{{ $movie->mx_player }}"><img
                                                            src="{{ asset('assets/frontend/images/mx_player.png') }}"
                                                            alt="mx player" /></a></li>
                                            @endif
                                        </ul>
                                    @endif
                                    <div class="flclear"></div>
                                </div>
                            </div>
                        </div>



                        <div class="tab-pane fade show active" id="nav-gallery" role="tabpanel"
                            aria-labelledby="nav-gallery-tab">
                            <div class="galleryslider">
                                <div class="demo-gallery">
                                    <div class="masonry slides" id="lightgallery">
                                        @if (isset($movie) and !empty($movie->gallery_url[0]))
                                            @foreach ($movie->gallery_url as $image)
                                                <div class="brick" data-src="/{{ $image }}">
                                                    <img src="/{{ $image }}">
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="flexslider1 carousel demo-gallery-mobile" style="display: none;">
                                    <ul class="slides" id="lightgallery-mobile">
                                        @if (isset($movie) and !empty($movie->gallery_url[0]))
                                            @foreach ($movie->gallery_url as $image)
                                                <li data-responsive="/{{ $image }}"
                                                    data-src="/{{ $image }}">
                                                    <a href="">
                                                        <img src="/{{ $image }}" width="100%" />
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
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @if (!empty($all_movies->first()))
                        <div class="releasedgallery">
                            <div class="heading mb-3">
                                <h2>Released</h2>
                            </div>
                            <div class="fourrowdiv">
                                <ul id="released_movies_block">

                                    @foreach ($all_movies as $movie)
                                        <li>
                                            <a
                                                href="{{ $movie->is_clickable == 'N' ? 'javascript:void(0)' : route('frontend.movie.details', $movie->slug) }}">
                                                <img src="/{{ $movie->poster_potrait_url }}" />
                                                <span class="moviename">{{ $movie->title }}</span>
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
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- content div end -->

    <!-- video popup Modal -->

    @if (isset($movie) and !empty($movie->youtube_trailer_link))
        <div class="videopopup">
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                                    aria-hidden="true">&times;</span> </button>
                        </div>
                        <div class="modal-body">
                            <div class="videoWrapper">
                                <iframe width="560" height="349" src="{{ $movie->youtube_trailer_link }}"
                                    frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif


    <!-- content div end -->
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            var current_page = '{{ $all_movies->currentPage() }}';
            var last_page = '{{ $all_movies->lastPage() }}';
            if (current_page == last_page) {
                $('.view_more').remove();
            }
            $('.view_more').click(function() {
                var nextPage = $(this).attr("next-page");
                var additionalParam = 'page=' + nextPage;
                var url = window.location.href;

                if (url.indexOf('?') !== -1) {
                    url += '&' + additionalParam;
                } else {
                    url += '?' + additionalParam;
                }

                $('.view_more').html('Loading...');
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: 'GET',
                    success: function(data) {
                        if (!data.error) {
                            $('#released_movies_block').append(data.view);
                            $('.view_more').attr('next-page', data.current_page + 1);

                            if (data.current_page == data.last_page) {
                                $('.view_more').remove();
                            }

                        } else {
                            $('#status').hide();
                            $('#preloader').hide();
                            toastr.error(data.message);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        $('#status').hide();
                        $('#preloader').hide();
                        toastr.error('Error occurred!');
                    }
                });
                $('.view_more').html('view more');
            });
        });

        $(document).ready(function() {
            itemWidth = 615;
            if ($(window).width() < 767) {
                itemWidth = 300;
            }
            $('.flexslider1').flexslider({
                animation: "slide",
                animationLoop: true,
                itemWidth: itemWidth,
                itemMargin: 20,
                maxItems: 1,
                before: function() {
                    $(window).resize();
                }
            });
        });
    </script>
@endsection
