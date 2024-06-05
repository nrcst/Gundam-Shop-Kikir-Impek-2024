@extends("layouts.layout")
@section("title", "HOME")
@section("content")

<div class="vstack gap-3 py-3 mt-3 mb-3" style="background-color: #E0CEB7;">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-left">
                <h1 class="font-weight-bold" style="color: #3d2b1e; font-weight: 700;">GUNDAM SPOT</h1>
                <p style="color: #3d2b1e; font-weight: 500; margin: 0 auto; max-width: 400px; text-align: justify;">
                    Providing high-quality products and exceptional custom repaint and detailing services in Malang.</p>
                <a href="/service" class="btn font-weight-bold" style="background-color: #b29f8e; color: #3d2b1e;">SHOP
                    NOW</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('assets/gundamshopbn.png') }}" alt="Banner Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <h2 class="text-center" style="color: #3d2b1e; font-weight: 700;">PRODUCTS</h2>
    <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @php
                $itemCount = 0;
                $maxItems = 12;
                $products = $products->sortByDesc('discount')->take($maxItems);
                $chunkSize = 4;
                $productChunks = $products->chunk($chunkSize);
            @endphp
            @foreach ($productChunks as $productChunk)
                <div class="carousel-item @if ($loop->first) active @endif">
                    <div class="row g-4 d-flex align-items-stretch">
                        @foreach ($productChunk as $product)
                            <div class="col-md-3 d-flex">
                                <div class="list-group-item h-100 flex-grow-1"
                                    style="background-color: #c7b7a3; border-radius: 10px; position: relative; display: flex; flex-direction: column;">
                                    <div class="image-container"
                                        style="width: 100%; height: 250px; overflow: hidden; display: flex; justify-content: center; align-items: center; margin-top: 10px; padding-top: 10px;">
                                        <img src="{{ $product->image }}" class="list-group-item-img rounded" alt="Product Image"
                                            style="max-width: 100%; max-height: 100%; object-fit: contain;">
                                        @if($product->discount)
                                            <span class="badge badge-danger"
                                                style="position: absolute; top: 10px; right: 10px; background-color: #b29f8e; color: #3d2b1e;">
                                                {{ $product->discount }}% OFF
                                            </span>
                                        @endif
                                    </div>
                                    <div class="list-group-item-body d-flex flex-column text-center limited-height mt-2">
                                        <h5 class="list-group-item-heading mb-1"
                                            style="color: #3d2b1e; font-size: 14px; font-weight: 700;">{{ $product->name }}</h5>
                                        <p class="list-group-item-text" style="color: #3d2b1e; font-size: 12px;">Price: Rp.
                                            {{ $product->price }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


<div class="container my-5 vstack gap-3 mt-5 mb-5">
    <h2 class="text-center" style="color: #3d2b1e; font-weight: 700;">EVENT</h2>
    <div class="row g-4">
        <div class="row g-4 d-flex align-items-stretch">
            <div class="col-md-4 d-flex">
                <div class="card h-100 flex-grow-1"
                    style="background-color: #c7b7a3; display: flex; flex-direction: column;">
                    <img src="{{ asset('assets/septemberevn.png') }}" class="card-img-top" alt="Image 1"
                        style="object-fit: contain; height: 250px; padding: 10px;">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center flex-grow-1">
                        <h5 class="card-title text-center" style="color: #3d2b1e; font-weight: 600;">SUMMER SALE</h5>
                        <p class="card-text text-center" style="color: #3d2b1e;">September 2023</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="card h-100 flex-grow-1"
                    style="background-color: #c7b7a3; display: flex; flex-direction: column;">
                    <img src="{{ asset('assets/octoberevn.png') }}" class="card-img-top" alt="Image 2"
                        style="object-fit: contain; height: 250px; padding: 10px;">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center flex-grow-1">
                        <h5 class="card-title text-center" style="color: #3d2b1e; font-weight: 600;">SUMMER SALE</h5>
                        <p class="card-text text-center" style="color: #3d2b1e;">October 2023</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="card h-100 flex-grow-1"
                    style="background-color: #c7b7a3; display: flex; flex-direction: column;">
                    <img src="{{ asset('assets/marchevent.png') }}" class="card-img-top" alt="Image 3"
                        style="object-fit: contain; height: 250px; padding: 10px;">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center flex-grow-1">
                        <h5 class="card-title text-center" style="color: #3d2b1e; font-weight: 600;">FEMALE BUILDER
                            CONTEST</h5>
                        <p class="card-text text-center" style="color: #3d2b1e;">March 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-3 vstack gap-3 mt-5 mb-5" style="background-color: #E0CEB7;">
    <div class="container">
        <h2 class="text-center my-4" style="color: #3d2b1e; font-weight: 700;">SERVICES</h2>
        <div class="row g-4 d-flex justify-content-center">
            <div class="col-md-4 col-sm-6">
                <div class="card h-100 text-center" style="background-color: #af8f6f; color: #3d2b1e;">
                    <a href="/service" class="btn font-weight-bold btn-block">
                        <img src="{{ asset('assets\productico.png') }}" alt="Service 1" class="img-fluid "
                            style="max-height: 150px; object-fit: contain;">
                        <h5 class="mt-3" style="color: #3d2b1e;">PRODUCT</h5>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card h-100 text-center" style="background-color: #af8f6f; color: #3d2b1e;">
                    <a href="/service" class="btn font-weight-bold btn-block">
                        <img src="{{ asset('assets\specialityico.png') }}" alt="Service 2" class="img-fluid"
                            style="max-height: 150px; object-fit: contain;">
                        <h5 class="mt-3" style="color: #3d2b1e;">SPECIALITY</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection