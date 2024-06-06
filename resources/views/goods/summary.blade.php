@extends("goods_layouts.layout")
@section("title", "Checkout Summary | Gundam Spot")
@section("content")
<div class="container m-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm" style="border-radius: 15px; background-color: #f0e3d4; border: 1px solid; border-color: #6f4e37;">
                <div class="card-header" style="border-top-left-radius: 15px; border-top-right-radius: 15px; background-color: #6f4e37;">
                    <h4 class="m-2 mt-3" style="color: #fff8e3;">Shopping Summary</h4>
                </div>
                <div class="card-body" style="color: #6f4e37;">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <p class="mb-0"><strong>Product:</strong></p>
                        <p class="mb-0">{{ $product->name }}</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <p class="mb-0"><strong>Quantity:</strong></p>
                        <p class="mb-0">{{ $quantity }}</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <p class="mb-0"><strong>Price per Item:</strong></p>
                        <p class="mb-0">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                    </div>
                    <hr>
                    <h5 style="color: #6f4e37;">Total Purchase</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <p class="mb-0">Total Price ({{ $quantity }} Item{{ $quantity > 1 ? 's' : '' }}):</p>
                        <p class="mb-0">Rp{{ number_format($totalPrice, 0, ',', '.') }}</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <p class="mb-0">Shipping Cost:</p>
                        <p class="mb-0">Rp{{ number_format($shippingCost, 0, ',', '.') }}</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <p class="mb-0">Shipping Insurance:</p>
                        <p class="mb-0">Rp{{ number_format($shippingInsurance, 0, ',', '.') }}</p>
                    </div>
                    <hr>
                    <h5 style="color: #6f4e37;">Transaction Fee</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <p class="mb-0">Service Fee:</p>
                        <p class="mb-0">Rp{{ number_format($serviceFee, 0, ',', '.') }}</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <p class="mb-0">Application Service Fee:</p>
                        <p class="mb-0">Rp{{ number_format($applicationServiceFee, 0, ',', '.') }}</p>
                    </div>
                    <hr>
                    <h4 class="text-right" style="color: #6f4e37;">Total Bill: Rp{{ number_format($totalBill, 0, ',', '.') }}</h4>
                </div>
            </div>
            <div class="mt-3">
                <form action="{{ route('checkout.confirm') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="quantity" value="{{ $quantity }}">
                    <button style="background-color: #6f4e37;" type="submit" class="btn btn-success mt-3 btn-lg btn-block border-0">Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection