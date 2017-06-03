@extends('admin.layouts.dashboard')

@section('dashboard')



    <div class="ui basic segment">
        <h1 class="ui header">User {{ $user->id }}</h1>


        <div class="ui buttons">
            <a href="{{  route('admin.users.index') }}"
               class="ui button"
               title="Back">
                <i class="arrow left icon"></i>
                </button>
            </a>
            <a href="{{ route('admin.users.edit' , ['id' => $user->id] ) }}"
               class="ui button"
               title="View User">
                <i class="edit icon"></i>
                </button>
            </a>
            {{ Form::open([
            'method'=>'DELETE',
            'route' => ['admin.users.destroy', $user->id],
            'style' => 'display:inline'
            ])
            }}
            {{ Form::button('<i class="trash icon" aria-hidden="true"></i>', array(
                    'type' => 'submit',
                    'class' => 'ui button',
                    'title' => 'Delete User',
                    'onclick'=>'return confirm("Confirm delete?")'
            )) }}
            {{ Form::close() }}

        </div>

    </div>



    <div class="ui basic segment">
        <table class="ui table">
            <tbody>
            <tr>
                <td>ID</td>
                <td>{{ $user->id }}</td>
            </tr>
            <tr>
                <td> First Name</td>
                <td> {{ $user->first_name }} </td>
            </tr>
            <tr>
                <td> Last Name</td>
                <td> {{ $user->last_name }} </td>
            </tr>
            <tr>
                <td> Email</td>
                <td> {{ $user->email }} </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
