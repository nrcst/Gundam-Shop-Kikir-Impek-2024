<nav style="background-color: #c7b7a3;" class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a href="#" class="navbar-brand">
            <img src="{{ asset('assets/icongs.png') }}" alt="Logo" style="width: 60px;"></a>
        <ul class="navbar-nav ms-auto d-flex flex-row gap-3">
            <li class="nav-item">
                <a href="#" class="nav-link fw-bold">Login</a></li>
            <li class="nav-item">
                <a href="#" class="nav-link fw-bold">Sign Up</a></li>
        </ul>
    </div>
</nav>
<nav style="background-color: #fff8e3;" class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarText">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarText">
        @php
        $currentRoute = Route::currentRouteName();
        @endphp
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{ route('home') }}" style="color: #574936; font-weight: bold;" class="nav-link @if($currentRoute == 'home') active @endif">HOME</a></li>
            <li class="nav-item">
                <a href="{{ route('about') }}" style="color: #574936; font-weight: bold;" class="nav-link @if($currentRoute == 'about') active @endif">ABOUT US</a></li>
            <li class="nav-item">
                <a href="{{ route('service') }}" style="color: #574936; font-weight: bold;" class="nav-link @if($currentRoute == 'service') active @endif">SERVICE</a></li>
            <li class="nav-item">
                <a href="{{ route('help') }}" style="color: #574936; font-weight: bold;" class="nav-link @if($currentRoute == 'help') active @endif">HELP</a></li>
        </ul>
        </div>
    </div>
</nav>