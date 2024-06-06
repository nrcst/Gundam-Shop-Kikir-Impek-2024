@extends("goods_layouts.layout")
@section("title", "{{ $product->name }} | Gundam Spot")
@section("content")

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="image-container d-flex my-5 p-3 bg-light rounded shadow-sm">
                <img src="{{ $product->image }}" class="img-fluid rounded border border-secondary" alt="Product Image">
            </div>
        </div>
        <div class="col-md-6">
            <div class="bg-light border rounded p-3 shadow-sm mb-3">
                <h1 class="mt-3">{{ $product->name }}</h1>
                <h2 class="text-muted">Rp{{ number_format($product->price, 0, ',', '.') }}</h2>
                <p><strong>Condition:</strong> New</p>
                <p><strong>Stock:</strong> {{ $product->stock }}</p>
                <p><strong>Category:</strong> {{ $product->category }}</p>
            </div>
            <div class="bg-light border rounded p-3 shadow-sm mb-3">
                <p><strong>Description:</strong> {{ $product->description }}</p>
            </div>
            <div class="bg-light border rounded p-3 shadow-sm mb-3">
                <h4>Shipment</h4>
                <p><i class="fa fa-map-marker"></i> Shipped from <strong>Malang</strong></p>
                <p><i class="fa fa-truck"></i> Regular Shipping Fee: Rp9.000 - Rp17.000</p>
            </div>
            <div class="p-3">
                @if ($product->stock > 0)
                    <div style="width: 200px;" class="input-group mb-4">
                        <form action="{{ route('checkout') }}" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-number" data-type="minus" data-field="quantity"
                                        style="border: 1px solid; color: #fff8e3; background-color: #6f4e37;">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </span>
                                <input type="text" name="quantity" class="form-control input-number" value="1" min="1"
                                    max="{{ $product->stock }}" readonly>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-number" data-type="plus" data-field="quantity"
                                        style="border: 1px solid; color: #fff8e3; background-color: #6f4e37;">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </span>
                            </div>
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <button type="submit" class="btn btn-lg btn-block"
                                style="background-color: #6f4e37; color: #fff8e3; border-color: #6f4e37;">
                                Buy now
                            </button>
                        </form>
                    </div>
                @else
                    <div style="width: 200px;" class="input-group mb-4">
                        <form>
                            <div class="input-group mb-3">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-number" data-type="minus" data-field="quantity"
                                        style="border: 1px solid; color: #fcf5e4; background-color: #9e8674;" disabled>
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </span>
                                <input type="text" name="quantity" class="form-control input-number" value="0" min="0"
                                    max="0" readonly>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-number" data-type="plus" data-field="quantity"
                                        style="border: 1px solid; color: #fcf5e4; background-color: #9e8674;" disabled>
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </span>
                            </div>
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <button type="submit" class="btn btn-lg btn-block mt-2"
                                style="background-color: #9e8674; color: #fcf5e4; border-color: #9e8674;" disabled>
                                Out of Stock
                            </button>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection