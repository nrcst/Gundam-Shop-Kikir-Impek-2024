@extends("layouts.layout")
@section("title", "SERVICES")
@section("content")

<div class="py-3 vstack gap-3 mt-5 mb-5">
    <div class="container" style="background-color: #dfd8cd; border-radius: 15px; padding: 20px;">
        <div class="col-md-12">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 text-center">
                        <a href="#" class="btn font-weight-bold btn-block"
                            style="background-color: #f5efe6; color: #3d2b1e;">
                            <img src="{{ asset('assets/service2.png') }}" alt="Service 2" class="img-fluid">
                            <h5 class="mt-3" style="color: #3d2b1e;">SHOP</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-4"> 
                    <div class="card h-100 text-center">
                        <a href="#" class="btn font-weight-bold btn-block"
                            style="background-color: #f5efe6; color: #3d2b1e;">
                            <img src="{{ asset('assets/service2.png') }}" alt="Service 2" class="img-fluid">
                            <h5 class="mt-3" style="color: #3d2b1e;">CUSTOM</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 text-center">
                        <a href="#" class="btn font-weight-bold btn-block"
                            style="background-color: #f5efe6; color: #3d2b1e;">
                            <img src="{{ asset('assets/service2.png') }}" alt="Service 2" class="img-fluid">
                            <h5 class="mt-3" style="color: #3d2b1e;">CUSTOM</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr style="border-top: 1px solid #3d2b1e;">

    <div class="container" style="background-color: #dfd8cd; border-radius: 15px; padding: 20px;">
        <div class="col-md-12">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 text-center">
                        <a href="#" class="btn font-weight-bold btn-block"
                            style="background-color: #f5efe6; color: #3d2b1e;">
                            <img src="{{ asset('assets/service2.png') }}" alt="Service 2" class="img-fluid">
                            <h5 class="mt-3" style="color: #3d2b1e;">SHOP</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 text-center   #f5efe6">
                        <a href="#" class="btn font-weight-bold btn-block"
                            style="background-color: #f5efe6; color: #3d2b1e;">
                            <img src="{{ asset('assets/service2.png') }}" alt="Service 2" class="img-fluid">
                            <h5 class="mt-3" style="color: #3d2b1e;">CUSTOM</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 text-center">
                        <a href="#" class="btn font-weight-bold btn-block"
                            style="background-color: #f5efe6; color: #3d2b1e;">
                            <img src="{{ asset('assets/service2.png') }}" alt="Service 2" class="img-fluid">
                            <h5 class="mt-3" style="color: #3d2b1e;">CUSTOM</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection