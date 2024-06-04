@extends("profile_layouts.layout")
@section("title", "PROFILE")
@section("content")

<div class="row">
    <div class="col-3 text-left">
        <div class="container">
            <div class="vstack gap-3 m-3 mt-5">
                <div style="font-family: 'sans'; font-weight: bold;" class="container ms-4">
                    <h4>MENU</h4>
                </div>
                <a href="profile" style="text-decoration: none;" class="button btn-link ms-5">PROFILE</a>
                <a href="orders" style="text-decoration: none;" class="button btn-link ms-5">ORDERS</a>
                <a href="booking" style="text-decoration: none;" class="button btn-link ms-5">BOOKING</a>
                <a href="chat" style="text-decoration: none;" class="button btn-link ms-5">CHAT</a>
            </div>
        </div>
    </div>
    <div class="col-8 text-left">
        <div class="container mt-5">
            <div class="card" style="border: none; padding: 20px; background-color: #f5efe6;">
                <h3 class="text-center" style="font-family: 'sans'; font-weight: bold;">Edit Profile</h3>
                <div class="text-center mb-4">
                    <img src="assets/icongs.png" alt="Profile Picture" class="rounded-circle" style="width: 100px;">
                    <br>
                    <a href="#" style="text-decoration: none; font-size: 14px;">Change Picture</a>
                </div>
                <form>
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First name</label>
                        <input type="text" class="form-control" id="firstName" value="">
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="lastName" value="">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" value="">
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Phone number</label>
                        <input type="tel" class="form-control" id="phoneNumber" value="">
                    </div>
                    <div class="mb-3">
                        <label for="dateOfBirth" class="form-label">Date of Birth</label>
                        <div class="d-flex">
                            <select class="form-select me-2" id="day">
                                <option selected>31</option>
                            </select>
                            <select class="form-select me-2" id="month">
                                <option selected>Oct</option>
                            </select>
                            <select class="form-select" id="year">
                                <option selected>1995</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" value="">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-select" id="gender">
                            <option selected>Male</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" style="background-color: #d8ccbe; border: none;">Save Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
