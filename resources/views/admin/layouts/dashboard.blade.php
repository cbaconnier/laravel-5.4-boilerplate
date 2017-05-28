@extends('layouts.app')


@section('content')

    <div class="ui basic segment">
        <div class="ui stackable grid">

            <div class="four wide column">
                @include('admin.layouts.partials.sidebar')
            </div>

            <div class="twelve wide column">
                @yield('dashboard')
            </div>
        </div>

    </div>

@endsection
