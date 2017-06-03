
<div class="field {{ $errors->has('first_name') ? ' error' : '' }}">
    <label>first_name</label>
        <div class="ui input">
    {{ Form::text('first_name', null, ['placeholder' => 'first_name', 'class' => '', 'required' => 'required']) }}
</div>
    @if ($errors->has('first_name'))
        <div class="ui basic red pointing prompt label transition visible">{{ $errors->first('first_name') }}</div>
    @endif
</div>

<div class="field {{ $errors->has('last_name') ? ' error' : '' }}">
    <label>last_name</label>
        <div class="ui input">
    {{ Form::text('last_name', null, ['placeholder' => 'last_name', 'class' => '', 'required' => 'required']) }}
</div>
    @if ($errors->has('last_name'))
        <div class="ui basic red pointing prompt label transition visible">{{ $errors->first('last_name') }}</div>
    @endif
</div>

<div class="field {{ $errors->has('email') ? ' error' : '' }}">
    <label>email</label>
        <div class="ui input">
    {{ Form::text('email', null, ['placeholder' => 'email', 'class' => '', 'required' => 'required']) }}
</div>
    @if ($errors->has('email'))
        <div class="ui basic red pointing prompt label transition visible">{{ $errors->first('email') }}</div>
    @endif
</div>

<div class="field {{ $errors->has('birth_date') ? ' error' : '' }}">
    <label>birth_date</label>
        <div class="ui input">
    {{ Form::date('birth_date', null, ['placeholder' => 'birth_date', 'class' => '']) }}
</div>
    @if ($errors->has('birth_date'))
        <div class="ui basic red pointing prompt label transition visible">{{ $errors->first('birth_date') }}</div>
    @endif
</div>

<div class="field {{ $errors->has('address1') ? ' error' : '' }}">
    <label>address1</label>
        <div class="ui input">
    {{ Form::text('address1', null, ['placeholder' => 'address1', 'class' => '']) }}
</div>
    @if ($errors->has('address1'))
        <div class="ui basic red pointing prompt label transition visible">{{ $errors->first('address1') }}</div>
    @endif
</div>

<div class="field {{ $errors->has('address2') ? ' error' : '' }}">
    <label>address2</label>
        <div class="ui input">
    {{ Form::text('address2', null, ['placeholder' => 'address2', 'class' => '']) }}
</div>
    @if ($errors->has('address2'))
        <div class="ui basic red pointing prompt label transition visible">{{ $errors->first('address2') }}</div>
    @endif
</div>

<div class="field {{ $errors->has('postcode') ? ' error' : '' }}">
    <label>postcode</label>
        <div class="ui input">
    {{ Form::text('postcode', null, ['placeholder' => 'postcode', 'class' => '']) }}
</div>
    @if ($errors->has('postcode'))
        <div class="ui basic red pointing prompt label transition visible">{{ $errors->first('postcode') }}</div>
    @endif
</div>


<div class="field {{ $errors->has('city') ? ' error' : '' }}">
    <label>city</label>
        <div class="ui input">
    {{ Form::text('city', null, ['placeholder' => 'city', 'class' => '']) }}
</div>
    @if ($errors->has('city'))
        <div class="ui basic red pointing prompt label transition visible">{{ $errors->first('city') }}</div>
    @endif
</div>

<div class="field {{ $errors->has('country') ? ' error' : '' }}">
    <label>country</label>
        <div class="ui input">
    {{ Form::text('country', null, ['placeholder' => 'country', 'class' => '']) }}
</div>
    @if ($errors->has('country'))
        <div class="ui basic red pointing prompt label transition visible">{{ $errors->first('country') }}</div>
    @endif
</div>

<div class="field {{ $errors->has('role') ? ' error' : '' }}">
    <label>role</label>
        {{ Form::select('role', ['todo-role1', 'todo-role2', 'todo-role3'], null, ['class' => 'ui dropdown']) }}

    @if ($errors->has('role'))
        <div class="ui basic red pointing prompt label transition visible">{{ $errors->first('role') }}</div>
    @endif
</div>


<div class="field">
    {{ Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'ui button']) }}
</div>

