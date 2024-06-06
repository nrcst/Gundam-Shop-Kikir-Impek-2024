@extends("layouts.layout")
@section("title", "SERVICES")
@section("content")

<div class="py-3 vstack gap-3 mt-5 mb-5">
    <div class="container"
        style="background-color: #dfd8cd; border-radius: 15px; padding: 30px; margin-top: 20px; margin-bottom: 20px; position: relative;">
        <h3 style="position: absolute; top: 20px; left: 30px; color: #3d2b1e; font-weight: bold;">Our Products</h3>
        <div class="col-md-12 mt-4">
            <div class="row g-4 d-flex justify-content-center">
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 text-center"
                        style="background-color: #f5efe6; color: #3d2b1e; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px;">
                        <a href="/service/product/gundam" class="btn font-weight-bold btn-block"
                            style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100%; width: 100%; text-align: center;">
                            <img src="{{ asset('assets/productico.png') }}" alt="Service 2" class="img-fluid"
                                style="max-height: 150px; object-fit: contain;">
                            <h5 class="mt-3" style="color: #3d2b1e; margin-top: auto;">GUNDAM</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 text-center"
                        style="background-color: #f5efe6; color: #3d2b1e; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px;">
                        <a href="/service" class="btn font-weight-bold btn-block"
                            style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100%; width: 100%; text-align: center;">
                            <img src="{{ asset('assets/tamiyaico.png') }}" alt="Service 2" class="img-fluid"
                                style="max-height: 150px; object-fit: contain; transform: scale(3);">
                            <h5 class="mt-3" style="color: #3d2b1e; margin-top: auto;">TAMIYA</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 text-center"
                        style="background-color: #f5efe6; color: #3d2b1e; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px;">
                        <a href="/service" class="btn font-weight-bold btn-block"
                            style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100%; width: 100%; text-align: center;">
                            <img src="{{ asset('assets/figureico.png') }}" alt="Service 2" class="img-fluid"
                                style="max-height: 150px; object-fit: contain;">
                            <h5 class="mt-3" style="color: #3d2b1e; margin-top: auto;">FIGURE</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr style="border-top: 1px solid #3d2b1e;">

    <div class="container"
        style="background-color: #dfd8cd; border-radius: 15px; padding: 30px; margin-top: 20px; margin-bottom: 20px; position: relative;">
        <h3 style="position: absolute; top: 20px; left: 30px; color: #3d2b1e; font-weight: bold;">Our Products</h3>
        <div class="col-md-12 mt-4">
            <div class="row g-4 d-flex justify-content-center">
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 text-center"
                        style="background-color: #f5efe6; color: #3d2b1e; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px;">
                        <a href="/service" class="btn font-weight-bold btn-block"
                            style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100%; width: 100%; text-align: center;">
                            <img src="{{ asset('assets/specialityico.png') }}" alt="Service 2" class="img-fluid"
                                style="max-height: 150px; object-fit: contain;">
                            <h5 class="mt-3" style="color: #3d2b1e; margin-top: auto;">DETAILING</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 text-center"
                        style="background-color: #f5efe6; color: #3d2b1e; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px;">
                        <a href="/service" class="btn font-weight-bold btn-block"
                            style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100%; width: 100%; text-align: center;">
                            <img src="{{ asset('assets/repairico.png') }}" alt="Service 2" class="img-fluid"
                                style="max-height: 150px; object-fit: contain;">
                            <h5 class="mt-3" style="color: #3d2b1e; margin-top: auto;">REPAIR</h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 text-center"
                        style="background-color: #f5efe6; color: #3d2b1e; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px;">
                        <a href="/service" class="btn font-weight-bold btn-block"
                            style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100%; width: 100%; text-align: center;">
                            <img src="{{ asset('assets/customico.png') }}" alt="Service 2" class="img-fluid"
                                style="max-height: 150px; object-fit: contain;">
                            <h5 class="mt-3" style="color: #3d2b1e; margin-top: auto;">CUSTOM</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection