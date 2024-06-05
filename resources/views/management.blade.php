@extends("profile_layouts.layout")
@section("title", "Add Product")
@section("content")

<div style="display: flex; flex-direction: column; align-items: center; background-color: #fef8f0; padding: 20px;">
    <!-- Form untuk menambahkan produk baru -->
    <!--form action="{{ route('products.store') }}" method="POST" style="width: 100%; max-width: 800px;">
        @csrf-->
        <!-- Basic Information Section -->
        <div style="background-color: #fff2e0; width: 100%; padding: 20px; border-radius: 10px; margin-bottom: 20px;">
            <h2 style="color: #5a2d0c;">Basic Information</h2>
            <div style="margin-bottom: 10px;">
                <label for="productName" style="display: block; font-weight: bold;">Product Name</label>
                <input type="text" id="productName" name="name" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
            <div>
                <label for="description" style="display: block; font-weight: bold;">Description</label>
                <textarea id="description" name="description" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" rows="4"></textarea>
            </div>
        </div>

        <!-- Product Image Section -->
        <div style="background-color: #fff2e0; width: 100%; padding: 20px; border-radius: 10px; margin-bottom: 20px;">
            <h2 style="color: #5a2d0c;">Product Image</h2>
            <div style="border: 2px dashed #ccc; width: 100%; height: 200px; display: flex; align-items: center; justify-content: center; border-radius: 10px;">
                <p>Upload your product image here</p>
            </div>
            <input type="text" id="image_url" name="image_url" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; margin-top: 10px;" placeholder="Image URL">
        </div>

        <!-- Stock and Pricing Section -->
        <div style="display: flex; gap: 20px; width: 100%; margin-bottom: 20px;">
            <div style="background-color: #fff2e0; flex: 1; padding: 20px; border-radius: 10px;">
                <h2 style="color: #5a2d0c;">Stock and Pricing</h2>
                <div style="margin-bottom: 10px;">
                    <label for="stock" style="display: block; font-weight: bold;">Stock</label>
                    <input type="number" id="stock" name="stock" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                </div>
                <div>
                    <label for="price" style="display: block; font-weight: bold;">Price</label>
                    <input type="number" id="price" name="price" step="0.01" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                </div>
            </div>

            <!-- Category Section -->
            <div style="background-color: #fff2e0; flex: 1; padding: 20px; border-radius: 10px;">
                <h2 style="color: #5a2d0c;">Category</h2>
                <div>
                    <label for="category" style="display: block; font-weight: bold;">Category</label>
                    <input type="text" id="category" name="category" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div style="text-align: center;">
            <button type="submit" style="background-color: #5a2d0c; color: white; padding: 10px 20px; border: none; border-radius: 5px;">Add Product</button>
        </div>
    </form>
</div>

@endsection
