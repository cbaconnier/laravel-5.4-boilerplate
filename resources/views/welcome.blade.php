@extends('layouts.app')

@section('content')

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
            <div class="item centered"><a href="https://github.com/laravel/laravel"><i
                            class="github icon"></i>GitHub</a>
            </div>
        </div>
    </div>

    {{-- component --}}
    <div class="ui container vertical stripe ">
        <div class="ui text segment ">
            <example></example>
        </div>
    </div>

@endsection
