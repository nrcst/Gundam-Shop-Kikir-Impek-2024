@extends("product_layouts.layout")
@section("title", "Product List")
@section("content")

<div class="container">
    <div style="display: flex; flex-direction: column; align-items: center; background-color: #f5efe6; padding: 20px;">
        <h1 style="color: #5a2d0c; font-weight: 700;">Gundam Spot</h1>
        <div style="display: flex; justify-content: flex-end; width: 100%; margin-bottom: 20px;">
        <div class="col">
            <div class="row d-flex justify-content-end pt-5 pb-3">
            <a href="{{ route('products.add') }}" style="background-color: #5a2d0c; color: white; padding: 10px 20px; border: none; text-decoration: none; width: 160px; border-radius: 5px;">+ Add Product</a>
            </div>
            <div class="row d-flex justify-content-center">
            <table style="width: 100%; max-width: 1500px; border-collapse: collapse; background-color: #fff2e0; border-radius: 10px; overflow: hidden;">
            <thead>
                <tr>
                    <th style="padding: 10px; border: 1px solid #ccc; text-align: center;">Name</th>
                    <th style="padding: 10px; border: 1px solid #ccc; text-align: center;">Description</th>
                    <th style="padding: 10px; border: 1px solid #ccc; text-align: center;">Price</th>
                    <th style="padding: 10px; border: 1px solid #ccc; text-align: center;">Stock</th>
                    <th style="padding: 10px; border: 1px solid #ccc; text-align: center;">Category</th>
                    <th style="padding: 10px; border: 1px solid #ccc; text-align: center;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td style="padding: 10px; border: 1px solid #ccc; text-align: center;">{{ $product->name }}</td>
                        <td style="padding: 10px; border: 1px solid #ccc; text-align: center;">{{ Str::limit($product->description, 50, '...') }}</td>
                        <td style="padding: 10px; border: 1px solid #ccc; text-align: center;">{{ $product->price }}</td>
                        <td style="padding: 10px; border: 1px solid #ccc; text-align: center;">{{ $product->stock }}</td>
                        <td style="padding: 10px; border: 1px solid #ccc; text-align: center;">{{ $product->category }}</td>
                        <td style="padding: 10px; border: 1px solid #ccc; text-align: start;">
                            <div style="display: flex; margin-bottom: 10px;">
                                <a href="{{ route('products.edit', $product->id) }}" style="margin-right: 10px; cursor: pointer;">
                                    <img src="/assets/edit.png" alt="Edit">
                                </a>
                                <form action="{{ route('products.product') }}" method="GET" style="display:inline;">
                                    @csrf
                                    <input type="hidden" name="delete" value="{{ $product->id }}">
                                    <button type="submit" style="color: transparent; background: none; border: none; cursor: pointer;">
                                        <img src="/assets/delete.png" alt="Delete">
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
            </div>
        </div>
        </div>
        {{ $products->links('pagination::bootstrap-4') }}
    </div>
</div>

@endsection
