@extends("layouts.layout")
@section("title", "ABOUT")
@section("content")

<div class="vstack gap-3 mt-3 mb-3">
    <!-- First placeholder: Paragraph text on left and image on right -->
    <div class="container-fluid d-flex align-items-center" style="height: 250px; background-color: #e0ceb7;">
        <div class="row w-100">
            <div class="col-md-6 d-flex align-items-center">
                <p style="color: #3d2b1e;">
                    Welcome to Gundam Spot! We are dedicated to providing high-quality Gundam models and exceptional custom repaint and detailing services. Our passion for Gundam models drives us to offer the best products and services to enthusiasts in Malang and beyond.
                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-center">
                <img src="{{ asset('assets/about1.png') }}" alt="About Us Image" class="img-fluid">
            </div>
        </div>
    </div>

    <!-- Second placeholder: Paragraph text on right and image on left -->
    <div class="container-fluid d-flex align-items-center" style="height: 250px; background-color: #b29f8e;">
        <div class="row w-100">
            <div class="col-md-6 d-flex justify-content-center">
                <img src="{{ asset('assets/about2.png') }}" alt="Our Services Image" class="img-fluid">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <p style="color: #3d2b1e;">
                    Our services include custom repainting, detailing, and repair of Gundam models. We take pride in our craftsmanship and attention to detail, ensuring that each model we work on meets the highest standards of quality. Whether you are a beginner or an experienced builder, we have something for everyone.
                </p>
            </div>
        </div>
    </div>

    <!-- Third placeholder: Card with title "Our Team" -->
    <div class="container-fluid" style="background-color: #e0ceb7;">
        <h2 class="text-center" style="color: #3d2b1e;">Our Team</h2>
        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="card h-100" style="background-color: #c7b7a3;">
                    <img src="{{ asset('assets/team1.png') }}" class="card-img-top" alt="Team Member 1" style="object-fit: contain; height: 200px; padding: 10px;">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="color: #3d2b1e;">John Doe</h5>
                        <p class="card-text" style="color: #3d2b1e;">Lead Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100" style="background-color: #c7b7a3;">
                    <img src="{{ asset('assets/team2.png') }}" class="card-img-top" alt="Team Member 2" style="object-fit: contain; height: 200px; padding: 10px;">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="color: #3d2b1e;">Jane Smith</h5>
                        <p class="card-text" style="color: #3d2b1e;">Master Painter</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100" style="background-color: #c7b7a3;">
                    <img src="{{ asset('assets/team3.png') }}" class="card-img-top" alt="Team Member 3" style="object-fit: contain; height: 200px; padding: 10px;">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="color: #3d2b1e;">Emily Johnson</h5>
                        <p class="card-text" style="color: #3d2b1e;">Repair Specialist</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
