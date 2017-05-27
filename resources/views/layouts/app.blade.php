<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ mix('/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
    @yield('styles')

</head>
<body>

{{-- Following Menu --}}
{{-- Should also be in #app but for some reason, the menu isn't sticky when out of context --}}
@include('layouts.partials.menu.fixed')

<div id="app">

    {{-- Responsive Sidebar Menu --}}
    @include('layouts.partials.menu.sidebar')


    <div class="pusher">
        <div class="ui container">
            {{-- Menu header --}}
            @include('layouts.partials.menu.top')



            {{-- Page Contents --}}
            @yield('content')

        </div>


        {{-- Footer --}}
        @include('layouts.partials.menu.footer')
    </div>

</div>

    {{--Scripts--}}
    <script src="{{ mix("/js/vendor.js") }}"></script>
    <script src="{{ mix("/js/main.js") }}"></script>
@yield('scripts')

</body>
</html>
