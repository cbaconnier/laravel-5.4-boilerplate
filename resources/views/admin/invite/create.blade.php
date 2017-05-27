@extends('layouts.app')

@section('content')
    <div class="admin-invite-create">
        <div class="ui basic segment">

            <form action="{{ route('invite.process') }}" method="post">

                {{ csrf_field() }}
                <h4 class="ui header">Send an invitation</h4>
                <p>Invite a user to register in your website</p>

                <div class="ui fluid form segment">
                    <div class="inline field">
                        <div class="field">
                            <div class="ui action input">
                                <input type="email" name="email" placeholder="Email"/>
                                <button type="submit" class="ui blue submit button">Submit</button>
                            </div>
                        </div>

                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection

