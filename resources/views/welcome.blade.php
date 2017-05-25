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


    </style>


</head>


<body>

<div id="app">
    {{-- Responsive Sidebar Menu --}}
    @include('layouts.menu.sidebar')


    {{-- Following Menu --}}
    @include('layouts.menu.fixed')



    {{-- Page Contents --}}
    <div class="pusher">
        <div class="ui vertical center aligned segment">


            {{-- Header --}}
            <div class="ui container">
                @include('layouts.menu.top')
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
                    <div id="app">
                        <example></example>
                    </div>
                </div>
            </div>

            {{-- Footer --}}
            <div class="ui inverted vertical footer segment">
                <div class="ui container">
                    <div class="ui stackable inverted divided equal height stackable grid">
                        <div class="three wide column">
                            <h4 class="ui inverted header">About</h4>
                            <div class="ui inverted link list">
                                <a href="#" class="item">Sitemap</a>
                                <a href="#" class="item">Contact Us</a>
                                <a href="#" class="item">Religious Ceremonies</a>
                                <a href="#" class="item">Gazebo Plans</a>
                            </div>
                        </div>
                        <div class="three wide column">
                            <h4 class="ui inverted header">Services</h4>
                            <div class="ui inverted link list">
                                <a href="#" class="item">Banana Pre-Order</a>
                                <a href="#" class="item">DNA FAQ</a>
                                <a href="#" class="item">How To Access</a>
                                <a href="#" class="item">Favorite X-Men</a>
                            </div>
                        </div>
                        <div class="seven wide column">
                            <h4 class="ui inverted header">Footer Header</h4>
                            <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


<script src="{{ mix("/js/vendor.js") }}"></script>
<script src="{{ mix("/js/main.js") }}"></script>
<script>

    $(document)
        .ready(function () {

            // fix menu when passed
            $('.menu-top')
                .visibility({
                    once: false,
                    onBottomPassed: function () {
                        $('.fixed.menu').transition('fade in');
                    },
                    onBottomPassedReverse: function () {
                        $('.fixed.menu').transition('fade out');
                    }
                })
            ;

            // create sidebar and attach to menu open
            $('.ui.sidebar')
                .sidebar({context: '#app'})
                .sidebar('attach events', '.burger.item')
                .sidebar('setting', 'transition', 'overlay')
            ;
        })
    ;


</script>

</body>
</html>
