<!DOCTYPE html>
<html lang="app()->getLocale()">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>@yield('title')</title>
        <link href= "{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bower_components/jquery-prettyPhoto/css/prettyPhoto.css') }}" rel="stylesheet">
        <link href=" {{ asset('bower_components/animate.css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('bower_components/responsive/vendor/responsive.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('images/ico/favicon.ico') }}">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/ico/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('images/ico/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('images/ico/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('images/ico/apple-touch-icon-57-precomposed.png') }}">
        <link href="{{ asset('bower_components/datatables.net-dt/css/jquery.dataTables.css') }}">
    </head><!--/head-->

    <body>
        @include('shared.header')
        @yield('content')
        @include('shared.footer')
        <script src="{{ asset('bower_components/jquery/jquery.js') }}"></script>
        <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('bower_components/scrollup/js/jquery.scrollUp.min.js') }}"></script>
        <!-- <script src="{{ asset('js/price-range.js') }}"></script> -->
        <script src="{{ asset('bower_components/jquery-prettyPhoto/js/jquery.prettyPhoto.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.js') }}"></script>
    </body>
</html>
