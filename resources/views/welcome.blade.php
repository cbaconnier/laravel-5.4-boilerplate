@extends('layouts.app')

@section('content')

    {{-- Title --}}
    <div class="ui center aligned basic segment">
        <h1>Laravel</h1>
    </div>

    {{-- Urls --}}
    <div class="ui basic segment">
        <div class="ui center aligned stackable grid">
            <div class="five column row">
                <div class="column">
                    <a href="https://laravel.com/docs"><i class="file text outline icon"></i>Documentation</a>
                </div>
                <div class="column">
                    <a href="https://laracasts.com"><i class="file video outline icon"></i>Laracasts</a>
                </div>
                <div class="column">
                    <a href="https://laravel-news.com"><i class="newspaper icon"></i>News</a>
                </div>
                <div class="column">
                    <a href="https://forge.laravel.com"><i class="cloud icon"></i>Forge</a>
                </div>
                <div class="column">
                    <a href="https://github.com/laravel/laravel"><i class="github icon"></i>GitHub</a>
                </div>
            </div>
        </div>
    </div>

    {{-- component --}}
    <div class="ui basic segment">
        <div class="ui text">
            <example></example>
        </div>
    </div>

@endsection
