@extends('frontend.layouts.master')
@section('title')
    Karma Media | News
@endsection

@section('css')
    <style>
        /* .newsmaindiv nav {
                        display: none
                    } */
    </style>
@endsection

@section('section')
    <!-- home slider div start -->
    <div class="radiusdiv">
        <div class="mainimg"><img src="https://www.karmamediaent.com/themes/karma-media/assets/images/news-big-img.jpg"
                alt="" /></div>
        <div class="sliderimg"><img src="https://www.karmamediaent.com/themes/karma-media/assets/images/slider-bg.png"
                alt="" />
        </div>
    </div>
    <!-- home slider div end -->

    <!-- content div start -->

    <div class="contentdiv">
        <div class="upcoming newspage">
            <div class="container">
                <div class="row align-items-bottom">
                    <div class="col-lg-3">
                        <div class="upcheding">
                            <h2>News</h2>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form method="GET" action="{{ route('frontend.news') }}">
                            <ul class="serchmovies">
                                <li class="textbox">
                                    <input type="text" name="query_str" placeholder="Search more news"
                                        class="form-control" value="{{ request()->query('query_str') }}" autocomplete="off">
                                </li>
                                <li class="monthyear">
                                    <select class="form-control minimal" name="month">
                                        <option value="" {{ request()->query('month') == '' ? 'selected' : '' }}>All
                                        </option>
                                        @foreach (config('constants.MONTH') as $key => $month)
                                            <option value="{{ $key }}"
                                                {{ request()->query('month') == $key ? 'selected' : '' }}>
                                                {{ $month }}</option>
                                        @endforeach
                                    </select>
                                </li>
                                <li class="monthyear">
                                    <select class="form-control minimal" name="year">
                                        <option value="" {{ request()->query('year') == '' ? 'selected' : '' }}>All
                                        </option>
                                        @foreach (config('constants.YEARS') as $key => $year)
                                            <option value="{{ $key }}"
                                                {{ request()->query('year') == $key ? 'selected' : '' }}>
                                                {{ $year }}</option>
                                        @endforeach
                                    </select>
                                </li>
                                <li class="monthyear">
                                    <button class="whitebtn btn-block">Find</button>
                                </li>
                            </ul>
                        </form>
                        <div class="flclear"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="newsmaindiv">
                <div class="row">
                    <div class="col-lg-12">
                        @if (!empty($all_news->first()))
                            <ul class="news newslisting" id="filter_news_block">
                                @foreach ($all_news as $news)
                                    <li>
                                        <a target="_blank" href="{{ $news->link }}">
                                            <img src="{{ $news->photo_url }}" alt="News image" />
                                            <h2>{{ $news->title }}</h2>
                                            <span class="bluelink">Read More</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="flclear"></div>

                            <div class="float-right">
                                <a href="javascript:void(0);" class="borderbtn view_more" next-page="2">view
                                    more</a>
                            </div>
                        @else
                            <div style="text-align: center;">
                                <h3>No record found.</h3>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            var current_page = '{{ $all_news->currentPage() }}';
            var last_page = '{{ $all_news->lastPage() }}';
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
                            console.log(data.view);
                            $('#filter_news_block').append(data.view);
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
                        $('#make-info').find(':input[type=submit]').prop('disabled', false);
                        $('#status').hide();
                        $('#preloader').hide();
                        toastr.error('Error occurred!');
                    }
                });
                $('.view_more').html('view more');
            });
        });
    </script>
@endsection
