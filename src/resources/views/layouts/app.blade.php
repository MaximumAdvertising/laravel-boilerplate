<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-title', config('app.name', 'Laravel'))</title>

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    @stack('stylesheets')

    {{-- Global site tag (gtag.js) - Google Analytics --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('GA_TRACKING_ID', 'UA-55899159-50') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{ env('GA_TRACKING_ID', 'UA-55899159-50') }}', { 'anonymize_ip': true });
    </script>
</head>
<body>
@section('body')
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
@show

{{-- Scripts --}}
<script src="{{ mix('/js/app.js') }}"></script>
@stack('scripts')
</body>
</html>
