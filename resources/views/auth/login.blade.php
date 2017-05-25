@extends('layouts.app')

@section('content')
    <div class="auth-login">
        <div class="ui middle aligned center aligned grid">


            <div class="column">

                <h2 class="ui header">
                    <div class="content">
                        Log-in to your account
                    </div>
                </h2>

                <form class="ui form" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="ui stacked segment left aligned">

                        {{-- Email --}}
                        <div class="field">
                            <div class="ui left icon {{ $errors->has('email') ? ' error' : '' }} input">
                                <i class="user icon"></i>
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


                        {{-- Remember --}}
                        <div class="field">
                            <div class="ui left checkbox">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label>Remember Me</label>
                            </div>

                        </div>

                        {{-- Submit --}}
                        <div class="field">
                            <button type="submit" class="ui fluid large submit button">Login</button>
                        </div>

                        {{-- Password forgot --}}
                        <div class="field">
                            <a class="ui mini floated compact message" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>

                    </div>

                </form>

                {{-- Signup --}}
                <a href="{{ url('/register')}}">
                    <div class="ui message">
                        New to us? Sign Up
                    </div>
                </a>


            </div>
        </div>
    </div>
@endsection