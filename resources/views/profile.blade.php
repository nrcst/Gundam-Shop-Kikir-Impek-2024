@extends("profile_layouts.layout")
@section("title", "PROFILE")
@section("content")

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
                    <a href="#" class="sidebar-link" style="color: #412918;">
                        <i class="fa-solid fa-list pe-2" style="color: #412918;"></i>
                        Profile
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link" style="color: #412918;">
                        <i class="fa-solid fa-list pe-2" style="color: #412918;"></i>
                        Profile
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link" style="color: #412918;">
                        <i class="fa-solid fa-list pe-2" style="color: #412918;"></i>
                        Profile
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link" style="color: #412918;">
                        <i class="fa-solid fa-list pe-2" style="color: #412918;"></i>
                        Profile
                    </a>
                </li>
                <!-- ... (rest of the sidebar navigation) -->
            </ul>
        </div>
    </aside>
    <!-- Main Component -->
    <div class="main">
        <nav class="navbar navbar-expand-lg px-3 border-bottom">
            <!-- Button for sidebar toggle -->
            <button class="btn" type="button" data-bs-theme="dark">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">
            <div class="row">
                <div class="col text-left">
                    <div class="container mt-5">
                        <div class="card" style="border: none; padding: 20px; background-color: #f5efe6; color: #412918;">
                            <h3 class="text-center" style="color: #412918; font-weight: bold;">Edit Profile</h3>
                            <div class="text-center mb-4">
                                <img src="assets/icongs.png" alt="Profile Picture" class="rounded-circle" style="width: 100px;">
                                <br>
                                <a href="#" style="text-decoration: none; font-size: 14px; color: #412918;">Change Picture</a>
                            </div>
                            <form>
                                <div class="mb-3">
                                    <label for="firstName" class="form-label" style="color: #412918;">First name</label>
                                    <input type="text" class="form-control" id="firstName" value="" style="background-color: #dfd5c6; color: #412918;">
                                </div>
                                <div class="mb-3">
                                    <label for="lastName" class="form-label" style="color: #412918;">Last name</label>
                                    <input type="text" class="form-control" id="lastName" value="" style="background-color: #dfd5c6; color: #412918;">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label" style="color: #412918;">Email</label>
                                    <input type="email" class="form-control" id="email" value="" style="background-color: #dfd5c6; color: #412918;">
                                </div>
                                <div class="mb-3">
                                    <label for="phoneNumber" class="form-label" style="color: #412918;">Phone number</label>
                                    <input type="tel" class="form-control" id="phoneNumber" value="" style="background-color: #dfd5c6; color: #412918;">
                                </div>
                                <div class="mb-3">
                                    <label for="dateOfBirth" class="form-label" style="color: #412918;">Date of Birth</label>
                                    <div class="d-flex">
                                        <select class="form-select me-2" id="day" style="background-color: #dfd5c6; color: #412918;">
                                            <option selected>31</option>
                                        </select>
                                        <select class="form-select me-2" id="month" style="background-color: #dfd5c6; color: #412918;">
                                            <option selected>Oct</option>
                                        </select>
                                        <select class="form-select" id="year" style="background-color: #dfd5c6; color: #412918;">
                                            <option selected>1995</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label" style="color: #412918;">Address</label>
                                    <input type="text" class="form-control" id="address" value="" style="background-color: #dfd5c6; color: #412918;">
                                </div>
                                <div class="mb-3">
                                    <label for="gender" class="form-label" style="color: #412918;">Gender</label>
                                    <select class="form-select" id="gender" style="background-color: #dfd5c6; color: #412918;">
                                        <option selected>Male</option>
                                    </select>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary" style="background-color: #412918; border: none; color: #d8ccbe;">Save Profile</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
    </div>
</div>

@endsection
