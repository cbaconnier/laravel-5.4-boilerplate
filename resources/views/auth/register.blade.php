@extends('layouts.app')

@section('content')
    <div class="auth-login">
        <div class="ui middle aligned center aligned grid">


            <div class="column">

                <h2 class="ui header">
                    <div class="content">
                        Register a new account
                    </div>
                </h2>

                <form class="ui form" role="form" method="POST"
                      action="{{ isset($token)? route('invite.register') : route('register') }}">

                    {{ csrf_field() }}

                    <div class="ui stacked segment left aligned">

                        @if(isset($token))
                            {{ Form::hidden('token', $token) }}
                        @endif

                        {{-- Name --}}
                        <div class="field">
                            <div class="ui left icon {{ $errors->has('name') ? ' error' : '' }} input">
                                <i class="user icon"></i>
                                <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                            </div>
                            @if ($errors->has('name'))
                                <div class="ui basic red pointing prompt label transition visible">{{ $errors->first('name') }}</div>
                            @endif
                        </div>

                        {{-- Email --}}
                        <div class="field">
                            <div class="ui left icon {{ $errors->has('email') ? ' error' : '' }} input">
                                <i class="mail icon"></i>
                                <input type="text" name="email" placeholder="E-mail address" value="{{ old('email') }}">
                            </div>
                            @if ($errors->has('email'))
                                <div class="ui basic red pointing prompt label transition visible">{{ $errors->first('email') }}</div>
                            @endif
                        </div>


                        {{-- Password --}}
                        <div class="field">
                            <div class="ui left icon {{ $errors->has('password') ? ' error' : '' }} input">
                                <i class="lock icon"></i>
                                <input type="password" name="password" placeholder="Password">
                            </div>
                            @if ($errors->has('password'))
                                <div class="ui basic red pointing prompt label transition visible">{{ $errors->first('password') }}</div>
                            @endif
                        </div>


                        {{-- Password confirmation --}}
                        <div class="field">
                            <div class="ui left icon {{ $errors->has('password') ? ' error' : '' }} input">
                                <i class="lock icon"></i>
                                <input type="password" name="password_confirmation" placeholder="Confirm Password">
                            </div>
                        </div>


                        {{-- Submit --}}
                        <div class="field">
                            <button type="submit" class="ui fluid large submit button">Register</button>
                        </div>

                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection