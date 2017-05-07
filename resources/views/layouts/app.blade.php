<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Title -->
        <title>{{ config('app.title') . ' - ' . config('app.name') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.plugins.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/xetaravel.min.css') }}" rel="stylesheet">

        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />

        <!-- Embed Styles -->
        @stack('style')

        <!-- Embed Scripts -->
        @stack('scriptsTop')
    </head>
    <body>

        <!-- Header -->
        @include('elements.header')

        @include('elements.flash')

        <!-- Content -->
        @yield('content')

        <!-- Footer -->
        @include('elements.footer')

        <!-- Scripts -->
        <script src="{{ asset('js/lib.min.js') }}"></script>

        <!-- CSRF JS Token -->
        <script type="text/javascript">
            window.Xetaravel = {!! json_encode(['csrfToken' => csrf_token()]) !!}
        </script>
        <script src="{{ asset('js/xetaravel.min.js') }}"></script>

        <!-- Embed Scripts -->
        @stack('scripts')
    </body>
</html>
