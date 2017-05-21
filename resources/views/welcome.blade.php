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

    <style type="text/css">

        .hidden.menu {
            display: none;
        }

        .masthead.segment {
            min-height: 700px;
            padding: 1em 0em;
        }
        .masthead .logo.item img {
            margin-right: 1em;
        }
        .masthead .ui.menu .ui.button {
            margin-left: 0.5em;
        }
        .masthead h1.ui.header {
            margin-top: 3em;
            margin-bottom: 0em;
            font-size: 4em;
            font-weight: normal;
        }
        .masthead h2 {
            font-size: 1.7em;
            font-weight: normal;
        }

        .ui.vertical.stripe {
            padding: 8em 0em;
        }
        .ui.vertical.stripe h3 {
            font-size: 2em;
        }
        .ui.vertical.stripe .button + h3,
        .ui.vertical.stripe p + h3 {
            margin-top: 3em;
        }
        .ui.vertical.stripe .floated.image {
            clear: both;
        }
        .ui.vertical.stripe p {
            font-size: 1.33em;
        }
        .ui.vertical.stripe .horizontal.divider {
            margin: 3em 0em;
        }

        .quote.stripe.segment {
            padding: 0em;
        }
        .quote.stripe.segment .grid .column {
            padding-top: 5em;
            padding-bottom: 5em;
        }

        .footer.segment {
            padding: 5em 0em;
        }

        .secondary.pointing.menu .toc.item {
            display: none;
        }

        @media only screen and (max-width: 700px) {
            .ui.fixed.menu {
                display: none !important;
            }
            .secondary.pointing.menu .item,
            .secondary.pointing.menu .menu {
                display: none;
            }
            .secondary.pointing.menu .toc.item {
                display: block;
            }
            .masthead.segment {
                min-height: 350px;
            }
            .masthead h1.ui.header {
                font-size: 2em;
                margin-top: 1.5em;
            }
            .masthead h2 {
                margin-top: 0.5em;
                font-size: 1.5em;
            }
        }


    </style>

    <script src="{{ mix("/js/vendor.js") }}"></script>
    <script src="{{ mix("/js/main.js") }}"></script>
    <script>

        $(document)
            .ready(function() {

                // fix menu when passed
                $('.masthead')
                    .visibility({
                        once: false,
                        onBottomPassed: function() {
                            $('.fixed.menu').transition('fade in');
                        },
                        onBottomPassedReverse: function() {
                            $('.fixed.menu').transition('fade out');
                        }
                    })
                ;

                // create sidebar and attach to menu open
                $('.ui.sidebar').sidebar('attach events', '.toc.item')
                ;

            })
        ;


    </script>

</head>


{{--<!-- Following Menu -->--}}
{{--<div class="ui large top fixed hidden menu">--}}
    {{--<div class="ui container">--}}
        {{--<a class="active item">Home</a>--}}
        {{--<a class="item">Work</a>--}}
        {{--<a class="item">Company</a>--}}
        {{--<a class="item">Careers</a>--}}
        {{--<div class="right menu">--}}
            {{--<div class="item">--}}
                {{--<a class="ui button">Log in</a>--}}
            {{--</div>--}}
            {{--<div class="item">--}}
                {{--<a class="ui primary button">Sign Up</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}


<!-- Sidebar Menu -->
<div class="ui vertical sidebar menu">
    <a class="active item">Home</a>
    <a class="item">Work1</a>
    <a class="item">Company1</a>
    <a class="item">Careers1</a>
    <a class="item">Login</a>
    <a class="item">Register</a>
</div>



<body class="pusher">
<div class="ui vertical masthead center aligned segment">

    <div class="ui container">
        <div class="ui large secondary  pointing menu">

            <a class="toc item">
                <i class="sidebar icon"></i>
            </a>

            @if (Auth::check())
                <a href="{{ url('/home') }}" class="item">Home</a>
            @endif
            <a class="item">Work</a>
            <a class="item">Company</a>

            <a class="item">Careers</a>
            @if (!Auth::check())
            <div class="right item">
                <a href="{{ url('/login') }}"  class="ui button">Login</a>
                <a  href="{{ url('/register')}}" class="ui button">Register</a>
            </div>
            @endif
        </div>
    </div>


        <div class="content">


            <div class="ui twelve column centered grid">
                <div class="column">Laravel</div>
                <div class="twelve column centered row">
                    <div class="column">Documentation</div>
                    <div class="column">Laracasts</div>
                    <div class="column">News</div>
                    <div class="column">Forge</div>
                    <div class="column">Github</div>
                </div>
            </div>


            <div class="title m-b-md">
                Laravel
            </div>

            <div class="links">
                <a href="https://laravel.com/docs"> <i class="alarm outline icon"></i> <i class="myanmar flag"></i>Documentation</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>

            <div id="app">
                <example></example>
            </div>
        </div>

</div>
</body>
</html>
