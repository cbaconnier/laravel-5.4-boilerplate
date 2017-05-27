@extends('layouts.app')

@section('content')
    <div class="ui basic segment">

        <div class="ui warning icon message">
            <i class="settings icon"></i>
            <div class="content">
                <div class="header">
                    503 Service unavailable
                </div>
                <p>
                    @if($exception->getMessage())
                        {{ $exception->getMessage() }}
                    @else
                        Oups.. We've got some trouble with our website. <br/>
                        But don't worry, we are working to bring it
                        back online
                    @endif
                </p>
            </div>
        </div>

    </div>
@endsection
