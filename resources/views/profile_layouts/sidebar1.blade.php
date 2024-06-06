<div class="wrapper">
    <!-- Sidebar -->
    <aside id="sidebar" class="sidebar-collapse d-lg-block">
        <div class="h-100">
            <div class="sidebar-logo">
                <a href="#" style="color: #412918;">MENU</a>
            </div>
            <!-- Sidebar Navigation -->
            <ul class="sidebar-nav">
            <li class="sidebar-item">
                    <a href="{{ url('profile') }}" class="sidebar-link {{ Request::is('profile') ? 'active' : '' }}" style="{{ Request::is('profile') ? 'background-color: #412918; color: #fff;' : 'color: #412918;' }}">
                        <i class="fa-solid fa-list pe-2" style="color: inherit;"></i>
                        <strong>Profile</strong>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ url('orders') }}" class="sidebar-link {{ Request::is('orders') ? 'active' : '' }}" style="{{ Request::is('orders') ? 'background-color: #412918; color: #fff;' : 'color: #412918;' }}">
                        <i class="fa-solid fa-list pe-2" style="color: inherit;"></i>
                        <strong>Orders</strong>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ url('booking') }}" class="sidebar-link {{ Request::is('booking') ? 'active' : '' }}" style="{{ Request::is('booking') ? 'background-color: #412918; color: #fff;' : 'color: #412918;' }}">
                        <i class="fa-solid fa-list pe-2" style="color: inherit;"></i>
                        <strong>Booking</strong>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ url('chat') }}" class="sidebar-link {{ Request::is('chat') ? 'active' : '' }}" style="{{ Request::is('chat') ? 'background-color: #412918; color: #fff;' : 'color: #412918;' }}">
                        <i class="fa-solid fa-list pe-2" style="color: inherit;"></i>
                        <strong>Chat</strong>
                    </a>
                </li>
                <!-- ... (rest of the sidebar navigation) -->
            </ul>
        </div>
    </aside>
    <!-- Main Component -->
    <div class="main">
        <nav class="navbar navbar-expand-lg px-3">
            <!-- Button for sidebar toggle -->
            <button class="btn" type="button" data-bs-theme="light">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">