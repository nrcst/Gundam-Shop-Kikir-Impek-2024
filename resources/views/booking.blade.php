@extends("profile_layouts.layout")
@section("title", "BOOKING")
@section("content")

<div class="row">
    <div class="col text-left">
        <div class="container mt-5">
            <h3 style="color: #412918; font-weight: bold; text-align: left;">Booking Confirmation</h3>
            <div class="card mt-4" style="border: none; padding: 20px; background-color: #b29f8e;">
                <form>
                    <div class="row mb-3">
                        <div class="col">
                            <input style="border: none; background-color: #f0e3d4; color: #766150" type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="col">
                            <input style="border: none; background-color: #f0e3d4; color: #766150" type="date" class="form-control" id="date" placeholder="Date">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input style="border: none; background-color: #f0e3d4; color: #766150" type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="col">
                            <input style="border: none; background-color: #f0e3d4; color: #766150" type="time" class="form-control" id="time" placeholder="Time">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input style="border: none; background-color: #f0e3d4; color: #766150" type="tel" class="form-control" id="phoneNumber" placeholder="Phone Number">
                        </div>
                        <div class="col">
                            <select style="border: none; background-color: #f0e3d4; color: #766150" class="form-select" id="paymentMethod">
                                <option selected>Choose...</option>
                                <option value="creditCard">Credit Card</option>
                                <option value="paypal">PayPal</option>
                                <option value="bankTransfer">Bank Transfer</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea style="border: none; background-color: #f0e3d4; color: #766150" class="form-control" id="productInformation" rows="3" placeholder="Product Information"></textarea>
                    </div>
                    <div class="mb-3">
                        <textarea style="border: none; background-color: #f0e3d4; color: #766150" class="form-control" id="customizationDetails" rows="3" placeholder="Customization Details"></textarea>
                    </div>
                    <div class="text-center">
                        <button style="border: none; background-color: #f0e3d4; color: #766150; font-weight: 600;" type="submit" class="btn btn-primary" style="background-color: #a38b6d; border: none;">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
