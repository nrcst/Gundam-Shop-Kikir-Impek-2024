@extends("goods_layouts.layout")

@section("title", "Gundam | Gundam Spot")
@section("content")

<div class="search-bar">
    <input type="text" placeholder="Search...">
    <button type="submit">Search</button>
</div>

<div class="container">
    <div class="row scroll-row">
        @php
            $chunkCount = 0;
        @endphp
        @foreach ($products->sortByDesc('discount')->chunk(4) as $chunk)
            @php
                $chunkCount++;
            @endphp
            @if ($chunkCount <= 2)
                @foreach ($chunk as $product)
                    <div class="col-md-3">
                        <div class="card h-100" style="background-color: #c7b7a3;">
                            <img src="{{ $product->image }}" class="card-img-top" alt="Product Image" style="object-fit: contain; height: 200px; padding: 10px;">
                            <div class="card-body d-flex flex-column gap-2">
                                <h5 class="card-title" style="color: #3d2b1e;">{{ $product->name }}</h5>
                                <p class="card-text" style="color: #3d2b1e;">Price: Rp. {{ $product->price }}</p>
                                @if($product->discount)
                                    <span class="badge badge-danger" style="position: absolute; top: 10px; right: 10px;">{{ $product->discount }}% OFF</span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        @endforeach
    </div>
</div>

@endsection