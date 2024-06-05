@extends("profile_layouts.layout")
@section("title", "Product List")
@section("content")

<div style="display: flex; flex-direction: column; align-items: center; background-color: #fef8f0; padding: 20px;">
    <h1 style="color: #5a2d0c;">Product List</h1>
    <a href="#" style="background-color: #5a2d0c; color: white; padding: 10px 20px; border: none; border-radius: 5px; text-decoration: none; margin-bottom: 20px; align-items: right">Add Product</a>
    <table style="width: 100%; max-width: 800px; border-collapse: collapse; background-color: #fff2e0; border-radius: 10px; overflow: hidden;">
        <thead>
            <tr>
                <th style="padding: 10px; border: 1px solid #ccc;">Name</th>
                <th style="padding: 10px; border: 1px solid #ccc;">Description</th>
                <th style="padding: 10px; border: 1px solid #ccc;">Price</th>
                <th style="padding: 10px; border: 1px solid #ccc;">Stock</th>
                <th style="padding: 10px; border: 1px solid #ccc;">Category</th>
                <th style="padding: 10px; border: 1px solid #ccc;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td style="padding: 10px; border: 1px solid #ccc;">{{ $product->name }}</td>
                    <td style="padding: 10px; border: 1px solid #ccc;">{{ $product->description }}</td>
                    <td style="padding: 10px; border: 1px solid #ccc;">{{ $product->price }}</td>
                    <td style="padding: 10px; border: 1px solid #ccc;">{{ $product->stock }}</td>
                    <td style="padding: 10px; border: 1px solid #ccc;">{{ $product->category }}</td>
                    <td style="padding: 10px; border: 1px solid #ccc;">
                        <a href="#" style="margin-right: 10px;">Edit</a>
                        <form action="{{ route('products.product') }}" method="GET" style="display:inline;">
                            @csrf
                            <input type="hidden" name="delete" value="{{ $product->id }}">
                            <button type="submit" style="color: red; background: none; border: none; cursor: pointer;">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
