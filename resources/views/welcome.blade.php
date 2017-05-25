<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{ mix('/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
</head>


<body>


{{-- Following Menu --}}
{{-- Should also be in #app but for some reason, the menu isn't sticky when out of context --}}
@include('layouts.partials.menu.fixed')

<div id="app">
    {{-- Responsive Sidebar Menu --}}
    @include('layouts.partials.menu.sidebar')


    {{-- Page Contents --}}
    <div class="pusher">
        <div class="ui vertical center aligned segment">


            {{-- Header --}}
            <div class="ui container">
                @include('layouts.partials.menu.top')
            </div>

            {{-- Content --}}

            {{-- Title --}}
            <div class="ui container vertical stripe ">
                <h1>Laravel</h1>
            </div>

            {{-- Urls --}}
            <div class="ui text container">
                <div class="ui centered grid">
                    <div class="item centered"><a href="https://laravel.com/docs"><i class="file text outline icon"></i>Documentation</a>
                    </div>
                    <div class="item centered"><a href="https://laracasts.com"><i class="file video outline icon"></i>Laracasts</a>
                    </div>
                    <div class="item centered"><a href="https://laravel-news.com"><i class="newspaper icon"></i>News</a>
                    </div>
                    <div class="item centered"><a href="https://forge.laravel.com"><i class="cloud icon"></i>Forge</a>
                    </div>
                    <div class="item centered"><a href="https://github.com/laravel/laravel"><i class="github icon"></i>GitHub</a>
                    </div>
                </div>
            </div>

            {{-- component --}}
            <div class="ui container vertical stripe ">
                <div class="ui text segment ">
                    <example></example>
                </div>
            </div>

            {{-- Footer --}}
            @include('layouts.partials.menu.footer')

        </div>
    </div>
</div>

<script src="{{ mix("/js/vendor.js") }}"></script>
<script src="{{ mix("/js/main.js") }}"></script>

</body>
</html>
