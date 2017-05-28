@extends('admin.layouts.dashboard')

@section('dashboard')
    <div class="admin-invite-create">
        <div class="ui basic segment">

            <h4 class="ui header">Send an invitation</h4>
            <p>Invite a user to register in your website</p>


            {{ Form::open([ 'route' => 'admin.invite.process', 'method' => 'post']) }}
            {{ csrf_field() }}

            <div class="ui fluid form segment">
                <div class="inline field">
                    <div class="field">
                        <div class="ui action fluid input">
                            {{ Form::text('email', old('email')) }}
                            {{ Form::button('Submit', ['class' => 'ui blue submit button']) }}
                        </div>
                    </div>
                </div>
            </div>

            {{ Form::close() }}

        </div>
    </div>

@endsection

