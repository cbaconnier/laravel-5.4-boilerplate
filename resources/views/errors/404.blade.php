@extends('layouts.app')

@section('content')
    <div class="ui basic segment">

        <div class="ui error icon message">
            <i class="warning icon"></i>
            <div class="content">
                <div class="header">
                    404 Page not found
                </div>
                <p>
                    @if($exception->getMessage())
                        {{ $exception->getMessage() }}
                    @else
                        Ohh... we can't find that page!
                    @endif
                </p>
            </div>
        </div>

    </div>
@endsection

