@extends("profile_layouts.layout")
@section("title", "BOOKING")
@section("content")

<div class="row">
    <div class="col text-left">
        <div class="container mt-5">
            <h3 style="color: #412918; font-weight: bold; text-align: center;">Booking Confirmation</h3>
            <div class="card mt-4" style="border: none; padding: 20px; background-color: #b29f8e;">
                <form>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="name" class="form-label">Name*</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="col">
                            <label for="date" class="form-label">Date*</label>
                            <input type="date" class="form-control" id="date">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="email" class="form-label">Email*</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="col">
                            <label for="time" class="form-label">Time*</label>
                            <input type="time" class="form-control" id="time">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="phoneNumber" class="form-label">Phone Number*</label>
                            <input type="tel" class="form-control" id="phoneNumber">
                        </div>
                        <div class="col">
                            <label for="paymentMethod" class="form-label">Payment Method*</label>
                            <select class="form-select" id="paymentMethod">
                                <option selected>Choose...</option>
                                <option value="creditCard">Credit Card</option>
                                <option value="paypal">PayPal</option>
                                <option value="bankTransfer">Bank Transfer</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="productInformation" class="form-label">Product Information*</label>
                        <textarea class="form-control" id="productInformation" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="customizationDetails" class="form-label">Customization Details*</label>
                        <textarea class="form-control" id="customizationDetails" rows="3"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" style="background-color: #a38b6d; border: none;">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
