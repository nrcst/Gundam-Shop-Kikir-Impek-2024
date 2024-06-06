@extends("profile_layouts.layout")
@section("title", "PROFILE")
@section("content")


          <div class="row">
            <div class="col-1"></div>
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
                                  <label for="firstName" class="form-label" style="color: #412918;">Name</label>
                                  <input type="text" class="form-control" id="Name" value="" style="background-color: #dfd5c6; color: #412918;">
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
                                  <input style="border: none; background-color: #dfd5c6; color: #766150" type="date" class="form-control" id="date" placeholder="Date">
                                  </div>
                              </div>
                              <div class="mb-3">
                                  <label for="address" class="form-label" style="color: #412918;">Address</label>
                                  <input type="text" class="form-control" id="address" value="" style="background-color: #dfd5c6; color: #412918;">
                              </div>
                              <div class="mb-3">
                                  <label for="gender" class="form-label" style="color: #412918;">Gender</label>
                                  <select class="form-select" id="gender" style="background-color: #dfd5c6; color: #412918;">
                                      <option selected>
                                        Male
                                      </option>
                                      <option>
                                        Female
                                      </option>
                                      <option>
                                        Other
                                      </option>
                                  </select>
                              </div>
                              <div class="text-center">
                                  <button type="submit" class="btn btn-primary mt-5" style="background-color: #d8ccbe; border: none; color: #766252;">Save Profile</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
              <div class="col-1"></div>
          </div>

@endsection
