<div class="menu-top">
    <div class="ui large secondary pointing menu">

        <a class="burger item">
            <i class="sidebar icon"></i>
        </a>

        @if (Auth::check())
            <a href="{{ url('/home') }}" class="item">Home</a>
        @endif
        <a class="item">Work</a>
        <a class="item">Company</a>

        <a class="item">Careers</a>
        <div class="right menu">
        @if (!Auth::check())
            <a href="{{ url('/login') }}" class="ui button">Login</a>
            <a href="{{ url('/register')}}" class="ui button">Register</a>
        @else

            <div class="ui dropdown item">
                {{ Auth::user()->name }} <i class="dropdown icon"></i>
                <div class="menu">
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
    </div>
</div>