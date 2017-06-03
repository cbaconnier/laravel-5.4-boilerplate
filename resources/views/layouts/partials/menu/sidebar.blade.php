<div class="menu-sidebar ui vertical sidebar menu">
    <a class="active item">Home</a>
    <a class="item">Work1</a>
    <a class="item">Company1</a>
    <a class="item">Careers1</a>

    @if (!Auth::check())
        <a href="{{ url('/login') }}" class="item">Login</a>
        <a href="{{ url('/register')}}" class="item">Register</a>
    @else
        <div class="ui styled fluid accordion">
            <div class="title">
                <i class="dropdown icon"></i>
                {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
            </div>
            <div class="content">
                <a class="item">Profile</a>
                <a href="{{ url('/logout') }}"
                   class="item"
                   onclick="event.preventDefault();
                $('#logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <a class="item">Spanish</a>
            </div>
        </div>
    @endif

</div>
