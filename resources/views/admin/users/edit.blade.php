@extends('admin.layouts.dashboard')

@section('dashboard')
    <div class="admin-crud-index">

        <div class="ui basic segment">
            <h1 class="ui header">Edit User #{{ $user->id }}</h1>


            <div class="add-button">
                <div class="ui left floated basic top">
                    <a href="{{  route('admin.users.index') }}" class="ui button"
                       title="Back">
                        <i class="arrow left icon" aria-hidden="true"></i> Back
                    </a>
                </div>
            </div>

        </div>


        <div class="segment">

            {{ Form::model($user, [
                'method' => 'PATCH',
                'route' => ['admin.users.update', $user->id],
                'class' => '',
                'files' => true
            ]) }}

            <div class="ui form">
                @include ('admin.users.form', ['submitButtonText' => 'Update'])
            </div>
            {{ Form::close() }}

        </div>
    </div>
@endsection
