<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    <body>
        <div id="app">
            @include('inc.navbar')

            @include('inc.messages')
            @yield('content')

            @include('inc.footer')
        </div>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtS7JUBje0GCskXjwb6VX_drs6pt0nRqw&callback=initMap"></script>
        <script src="http://localhost/newhorizon/public/js/custom.js"></script>
        <script src="https://kit.fontawesome.com/707760e380.js"></script>
        <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            CKEDITOR.replace( 'ckeditor' );
        </script>
    </body>
</html>

