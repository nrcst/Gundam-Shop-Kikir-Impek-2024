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

<div class="container my-5 vstack gap-3 mt-5 mb-5">
    <h2 class="text-center" style="color: #3d2b1e; font-weight: 700;">EVENT</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100" style="background-color: #c7b7a3;">
                <img src="{{ asset('assets/septemberevn.png') }}" class="card-img-top" alt="Image 1"
                    style="object-fit: contain; height: 200px; padding: 10px;">
                <div class="card-body d-flex flex-column gap-2">
                    <h5 class="card-title" style="color: #3d2b1e;">SUMMER SALE</h5>
                    <p class="card-text" style="color: #3d2b1e;">September 2023</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100" style="background-color: #c7b7a3;">
                <img src="{{ asset('assets/octoberevn.png') }}" class="card-img-top" alt="Image 2"
                    style="object-fit: contain; height: 200px; padding: 10px;">
                <div class="card-body d-flex flex-column gap-2">
                    <h5 class="card-title" style="color: #3d2b1e;">SUMMER SALE</h5>
                    <p class="card-text" style="color: #3d2b1e;">October 2023</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100" style="background-color: #c7b7a3;">
                <img src="{{ asset('assets/marchevent.png') }}" class="card-img-top" alt="Image 3"
                    style="object-fit: contain; height: 200px; padding: 10px;">
                <div class="card-body d-flex flex-column gap-2">
                    <h5 class="card-title" style="color: #3d2b1e;">FEMALE BUILDER CONTEST</h5>
                    <p class="card-text" style="color: #3d2b1e;">March 2024</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-3 vstack gap-3 mt-5 mb-5" style="background-color: #E0CEB7;">
    <div class="container">
        <h2 class="text-center my-4" style="color: #3d2b1e; font-weight: 700;">SERVICES</h2>
        <div class="row g-4 d-flex justify-content-center">
            <div class="col-md-4">
                <div class="card h-100 text-center">
                    <a href="/service" class="btn font-weight-bold btn-block"
                        style="background-color: #b29f8e; color: #3d2b1e;">
                        <img src="{{ asset('assets/service2.png') }}" alt="Service 2" class="img-fluid">
                        <h5 class="mt-3" style="color: #3d2b1e;">PRODUCT</h5>
                    </a>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 text-center">
                    <a href="/service" class="btn font-weight-bold btn-block"
                        style="background-color: #b29f8e; color: #3d2b1e;">
                        <img src="{{ asset('assets/service3.png') }}" alt="Service 3" class="img-fluid">
                        <h5 class="mt-3" style="color: #3d2b1e;">SPECIALITY</h5>
                    </a>
                </div>
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
                $maxItems = 8;
                $products = $products->sortByDesc('discount')->take($maxItems);
                $chunkSize = 4;
                $productChunks = $products->chunk($chunkSize);
            @endphp
            @foreach ($productChunks as $productChunk)
                <div class="carousel-item @if ($loop->first) active @endif">
                    <div class="row g-4">
                        @foreach ($productChunk as $product)
                            <div class="col-md-3">
                                <div class="list-group-item h-100" style="background-color: #c7b7a3;">
                                    <img src="{{ $product->image }}" class="list-group-item-img" alt="Product Image"
                                        style="object-fit: contain; height: 200px; padding: 10px;">
                                    <div class="list-group-item-body d-flex flex-column gap-2">
                                        <h5 class="list-group-item-heading" style="color: #3d2b1e;">{{ $product->name }}</h5>
                                        <p class="list-group-item-text" style="color: #3d2b1e;">Price: Rp. {{ $product->price }}
                                        </p>
                                        @if($product->discount)
                                            <span class="badge badge-danger"
                                                style="position: absolute; top: 10px; right: 10px;">{{ $product->discount }}%
                                                OFF</span>
                                        @endif
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

@endsection