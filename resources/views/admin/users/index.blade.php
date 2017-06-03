@extends('admin.layouts.dashboard')

@section('dashboard')

    <div class="admin-crud-index">


        <div class="ui basic segment">
            <h1 class="ui header">Users</h1>
        </div>


        <div class="search-input">
            <div class="ui right floated basic top segment">
                {{ Form::open(['method' => 'GET', 'route' => 'admin.users.index', 'role' => 'search'])  }}
                <div class="ui action input">
                    <input type="text" name="search" placeholder="Search...">
                    <button type="submit" class="ui icon button">
                        <i class="search icon"></i>
                    </button>
                </div>
                {{ Form::close() }}
            </div>
        </div>


        <div class="ui basic segment">
            <table class="ui table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th><th>Last Name</th><th>Email</th>
                    <th>Actions</th>
                </tr>
                </thead>


                <tbody>
                @foreach($users as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->first_name }}</td><td>{{ $item->last_name }}</td><td>{{ $item->email }}</td>
                        <td>

                            <div class="ui buttons">
                                <a href="{{ route('admin.users.show' , ['id' => $item->id] ) }}"
                                   class="ui button"
                                   title="View User">
                                    <i class="unhide icon"></i>
                                    </button>
                                </a>
                                <a href="{{ route('admin.users.edit' , ['id' => $item->id] ) }}"
                                   class="ui button"
                                   title="View User">
                                    <i class="edit icon"></i>
                                    </button>
                                </a>


                                {{ Form::open([
                                'method'=>'DELETE',
                                'route' => ['admin.users.destroy', $item->id],
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

                        </td>
                    </tr>
                @endforeach
                </tbody>

                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>First Name</th><th>Last Name</th><th>Email</th>
                    <th>Actions</th>
                </tr>
                </tfoot>
            </table>


        </div>
        <div class="ui right floated basic segment">
            <div class="pagination-wrapper"> {{ $users->appends(['search' => Request::get('search')])->render() }} </div>
        </div>
    </div>

@endsection
