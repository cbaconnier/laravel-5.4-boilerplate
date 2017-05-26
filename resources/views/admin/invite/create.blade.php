@extends('layouts.app')

@section('content')
    <form action="{{ route('invite.process') }}" method="post">
        {{ csrf_field() }}
        <input type="email" name="email" />
        <button type="submit">Send invite</button>
    </form>
@endsection