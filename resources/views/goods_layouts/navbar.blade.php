<nav style="background-color: #c7b7a3;" class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
            <img src="{{ asset('assets/icongs.png') }}" alt="Logo" style="width: 60px;"></a>
        <ul class="navbar-nav ms-auto d-flex flex-row gap-3">
            @guest
                <!-- If the user is not authenticated -->
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link fw-bold">Login</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link fw-bold">Sign Up</a>
                </li>
            @else
                <!-- If the user is authenticated -->
                <li class="nav-item">
                    <a href="{{ route('profile') }}" class="nav-link fw-bold">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link fw-bold"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @endguest
        </ul>
    </div>
</nav>