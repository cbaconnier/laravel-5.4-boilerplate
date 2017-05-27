@extends('beautymail::templates.sunny')


@section('content')

    @include('beautymail::templates.sunny.heading', [
		'heading' => 'Title!',
		'level' => 'h1'
	])


    @include('beautymail::templates.sunny.contentStart')

    <h4 class="secondary"><strong>Hi,</strong></h4>
    <p>Someone has invited you to create an account.</p>

    @include('beautymail::templates.sunny.contentEnd')



    @include('beautymail::templates.sunny.contentStart')


    @include('beautymail::templates.sunny.button', [
           'title' => 'Activate now!',
           'link' => route('invite.accept', $invite->token)
   ])

    @include('beautymail::templates.sunny.contentEnd')

@stop