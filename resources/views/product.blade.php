@extends("profile_layouts.layout")
@section("title", "GUNDAM SPOT")
@section("content")

<div style="display: flex; flex-direction: column; align-items: center; background-color: #fef8f0; padding: 20px;">
    <h1 style="color: #5a2d0c;">GUNDAM SPOT</h1>
    <button style="background-color: #5a2d0c; color: white; padding: 10px 20px; border: none; border-radius: 5px; margin-bottom: 20px;">+ Add Product</button>
    
    <table style="width: 100%; max-width: 800px; background-color: #fff2e0; border-collapse: collapse; border-radius: 10px; overflow: hidden;">
        <thead style="background-color: #f5e8d6;">
            <tr>
                <th style="padding: 10px; text-align: left;">Product</th>
                <th style="padding: 10px; text-align: left;">Category</th>
                <th style="padding: 10px; text-align: left;">Stock</th>
                <th style="padding: 10px; text-align: left;">Price</th>
                <th style="padding: 10px; text-align: left;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td style="padding: 10px; border-bottom: 1px solid #f5e8d6; display: flex; align-items: center;">
                    <input type="checkbox" style="margin-right: 10px;">
                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" style="width: 50px; height: 50px; margin-right: 10px; border-radius: 5px;">
                    <span>{{ $product->name }}</span>
                </td>
                <td style="padding: 10px; border-bottom: 1px solid #f5e8d6;">{{ $product->category }}</td>
                <td style="padding: 10px; border-bottom: 1px solid #f5e8d6;">{{ $product->stock }}</td>
                <td style="padding: 10px; border-bottom: 1px solid #f5e8d6;">{{ number_format($product->price, 0, ',', '.') }}</td>
                <td style="padding: 10px; border-bottom: 1px solid #f5e8d6;">
                    <button style="background-color: #5a2d0c; color: white; padding: 5px 10px; border: none; border-radius: 5px; margin-right: 5px;">✎</button>
                    <button style="background-color: #5a2d0c; color: white; padding: 5px 10px; border: none; border-radius: 5px;">🗑</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div style="margin-top: 20px;">
        {{ $products->links() }}
    </div>
</div>

@endsection
