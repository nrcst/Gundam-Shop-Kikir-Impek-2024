@extends("profile_layouts.layout")
@section("title", "ORDERS")
@section("content")

<div class="row">
    <div class="col text-left">
        <div class="container mt-5">
            <h3 style="color: #412918; font-weight: bold; text-align: left;">Transaction Details</h3>
            <div class="card mt-4" style="border: none; padding: 20px; background-color: #f0e3d4;">
                <h5>Order Completed</h5>
                <div class="row">
                    <div class="col">
                        <p style="font-family: 'Hanuman', sans-serif;">Invoice Number</p>
                    </div>
                    <div class="col">
                        <p>INV/20240527/MPL/3408943630</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Date of Purchase</p>
                    </div>
                    <div class="col">
                        <p>May 27, 2025, 15:46 WIB</p>
                    </div>
                </div>
            </div>
            <div class="card mt-4" style="border: none; padding: 20px; background-color: #f0e3d4;">
                <h5>Product Details</h5>
                <div class="row">
                    <div class="col">
                        <img src="assets/icongs.png" alt="Product Image" class="img-thumbnail" style="width: 150px;">
                    </div>
                    <div class="col">
                        <p>RG RX 78-2</p>
                        <p>1 x Rp385.000</p>
                    </div>
                    <div class="col text-end">
                        <p>Total Price</p>
                        <p>Rp385.000</p>
                        <button type="button" class="btn btn-primary" style="background-color: #d8ccbd; color: #766252; border: none;">Buy Again</button>
                    </div>
                </div>
            </div>
            <div class="card mt-4" style="border: none; padding: 20px; background-color: #f0e3d4;">
                <h5>Shipping Information</h5>
                <div class="row">
                    <div class="col">
                        <p>Courier</p>
                    </div>
                    <div class="col">
                        <p>JNE Reg - Regular</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Receipt Number</p>
                    </div>
                    <div class="col">
                        <p>TLJR3DJVKCMQ1806</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Address</p>
                    </div>
                    <div class="col">
                        <p>Sukimin Sukasmin<br>(087817221343)<br>Jl. Bulungan Blok C No.1, RT.11/RW.7,<br>Kramat Pela, Kec. Kby. Baru, Kota Jakarta Selatan,<br>Daerah Khusus Ibukota Jakarta 12130</p>
                    </div>
                </div>
            </div>
            <div class="card mt-4" style="border: none; padding: 20px; background-color: #f0e3d4;">
                <h5>Payment Details</h5>
                <div class="row">
                    <div class="col">
                        <p>Payment Method</p>
                    </div>
                    <div class="col">
                        <p>BCA Virtual Account</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Total Price (1 Item)</p>
                    </div>
                    <div class="col">
                        <p>Rp385.000</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Shipping Cost</p>
                    </div>
                    <div class="col">
                        <p>Rp20.050</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Transaction Fee</p>
                    </div>
                    <div class="col">
                        <p>Rp2.000</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Shipping Discount</p>
                    </div>
                    <div class="col">
                        <p>-Rp9.000</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Total Purchase</p>
                    </div>
                    <div class="col">
                        <p>Rp398.500</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
