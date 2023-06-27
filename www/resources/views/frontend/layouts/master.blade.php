<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="title" content="">
    <meta name="description" content="">
    <meta name="author" content="KarmaMedia">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- @yield('title') --}}
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ URL::asset('assets/images/favicon.png')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/frontend/favicon_io/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/frontend/favicon_io/favicon-32x32.png')}}/">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/frontend/favicon_io/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/frontend/favicon_io/site.webmanifest')}}"> --}}
    @yield('css')
    @include('frontend.layouts.header-css')
</head>

<body>
    <div id="load"></div>
    <div class="maindiv" id="contents">
        @include('frontend.layouts.header')

        @yield('section')


        @include('frontend.layouts.footer')
        @include('frontend.layouts.footer-js')
        @yield('script')
    </div>
</body>

</html>
