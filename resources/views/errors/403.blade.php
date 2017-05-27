@extends('layouts.app')

@section('content')
    <div class="ui basic segment">

        <div class="ui error icon message">
            <i class="warning icon"></i>
            <div class="content">
                <div class="header">
                    403 Access Denied
                </div>
                <p>
                    @if($exception->getMessage())
                        {{ $exception->getMessage() }}
                    @else
                        Ohh... You can't go there!
                    @endif
                </p>
            </div>
        </div>

    </div>
@endsection
