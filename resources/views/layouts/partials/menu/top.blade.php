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
        @if (!Auth::check())
            <div class="right item">
                <a href="{{ url('/login') }}" class="ui button">Login</a>
                <a href="{{ url('/register')}}" class="ui button">Register</a>
            </div>
        @endif
    </div>
</div>