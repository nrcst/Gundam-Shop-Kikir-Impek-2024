@extends("profile_layouts.layout")
@section("title", isset($product) ? "Edit Product" : "Add Product")
@section("content")

<div style="display: flex; flex-direction: column; align-items: center; background-color: #fef8f0; padding: 20px;">
    <form action="{{ isset($product) ? route('products.update', $product->id) : route('products.store') }}" method="POST" style="width: 100%; max-width: 800px;">
        @csrf
        @if(isset($product))
            @method('PUT')
        @endif
        <div style="background-color: #fff2e0; width: 100%; padding: 20px; border-radius: 10px; margin-bottom: 20px;">
            <h2 style="color: #5a2d0c;">Basic Information</h2>
            <div style="margin-bottom: 10px;">
                <label for="productName" style="display: block; font-weight: bold;">Product Name</label>
                <input type="text" id="productName" name="name" value="{{ old('name', $product->name ?? '') }}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
            <div>
                <label for="description" style="display: block; font-weight: bold;">Description</label>
                <textarea id="description" name="description" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" rows="4">{{ old('description', $product->description ?? '') }}</textarea>
            </div>
        </div>
        <div style="background-color: #fff2e0; width: 100%; padding: 20px; border-radius: 10px; margin-bottom: 20px;">
            <h2 style="color: #5a2d0c;">Product Image</h2>
            <input type="text" id="image" name="image" value="{{ old('image', $product->image ?? '') }}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; margin-top: 10px;" placeholder="Image URL">
        </div>
        <div style="display: flex; gap: 20px; width: 100%; margin-bottom: 20px;">
            <div style="background-color: #fff2e0; flex: 1; padding: 20px; border-radius: 10px;">
                <h2 style="color: #5a2d0c;">Stock and Pricing</h2>
                <div style="margin-bottom: 10px;">
                    <label for="stock" style="display: block; font-weight: bold;">Stock</label>
                    <input type="number" id="stock" name="stock" value="{{ old('stock', $product->stock ?? '') }}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                </div>
                <div>
                    <label for="price" style="display: block; font-weight: bold;">Price</label>
                    <input type="number" id="price" name="price" value="{{ old('price', $product->price ?? '') }}" step="0.01" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                </div>
            </div>
            <div style="background-color: #fff2e0; flex: 1; padding: 20px; border-radius: 10px;">
                <h2 style="color: #5a2d0c;">Category</h2>
                <div>
                    <label for="category" style="display: block; font-weight: bold;">Category</label>
                    <input type="text" id="category" name="category" value="{{ old('category', $product->category ?? '') }}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                </div>
            </div>
        </div>
        <div style="text-align: center;">
            <button type="submit" style="background-color: #5a2d0c; color: white; padding: 10px 20px; border: none; border-radius: 5px;">{{ isset($product) ? 'Update Product' : 'Add Product' }}</button>
        </div>
    </form>
</div>

@endsection
