<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #5a6b79 !important;">
    <a class="navbar-brand" href="/">Crowd Funding</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About Us </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact </a>
            </li>

        </ul>

        <ul class="navbar-nav ml-auto">



            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->username }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    @if (auth()->user()->isAdmin())
                    <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
                    @endif

                    @if (auth()->user()->isMember())
                    <a class="dropdown-item" href="#">Dashboard</a>
                    @endif

                    <a class="dropdown-item" href="#">Profile</a>

                    {{-- logout button --}}
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    {{-- logout form --}}
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </div>
</nav>