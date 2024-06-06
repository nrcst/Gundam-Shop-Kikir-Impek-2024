@extends("goods_layouts.layout")

@section("title", "Gundam | Gundam Spot")
@section("content")

<div class="container mt-5">
    <form method="GET" action="{{ route('goods.gundam') }}" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search in store"
                value="{{ request()->search }}">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary ml-2"
                    style="width: 150px; background-color: #6f4e37;">Search</button>
            </div>
        </div>
    </form>
    <form method="GET" action="{{ route('goods.gundam') }}" class="mb-3">
        <select name="sort" class="form-control" onchange="this.form.submit()">
            <option value="price" {{ request()->sort == 'price' ? 'selected' : '' }}>Sort by Price</option>
            <option value="name" {{ request()->sort == 'name' ? 'selected' : '' }}>Sort by Name</option>
            <option value="category" {{ request()->sort == 'category' ? 'selected' : '' }}>Sort by Category</option>
        </select>
        <select name="direction" class="form-control mt-2" onchange="this.form.submit()">
            <option value="asc" {{ request()->direction == 'asc' ? 'selected' : '' }}>Ascending</option>
            <option value="desc" {{ request()->direction == 'desc' ? 'selected' : '' }}>Descending</option>
        </select>
    </form>

    <div class="row">
        @foreach ($products as $product)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex mb-4">
                <a href="" class="list-group-item h-100 flex-grow-1"
                    style="background-color: #c7b7a3; border-radius: 10px; position: relative; display: flex; flex-direction: column; text-decoration: none;">
                    <div class="image-container"
                        style="width: 100%; height: 300px; overflow: hidden; display: flex; justify-content: center; align-items: center; margin-top: 10px;">
                        <img src="{{ $product->image }}" class="list-group-item-img rounded" alt="Product Image"
                            style="max-width: 100%; max-height: 100%; object-fit: contain;">
                        @if($product->discount)
                            <span class="badge badge-danger"
                                style="position: absolute; top: 10px; right: 10px; background-color: #b29f8e; color: #3d2b1e;">
                                {{ $product->discount }}% OFF
                            </span>
                        @endif
                    </div>
                    <div class="list-group-item-body d-flex flex-column text-center mt-2" style="flex-grow: 1;">
                        <h5 class="list-group-item-heading mb-1"
                            style="color: #3d2b1e; font-size: 14px; font-weight: 700;">{{ $product->name }}</h5>
                        <p class="list-group-item-text" style="color: #3d2b1e; font-size: 12px;">Price: Rp.
                            {{ number_format($product->price, 0, ',', '.') }}
                        </p>
                        <p class="list-group-item-text" style="color: #3d2b1e; font-size: 12px;">Stock: {{ $product->stock }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-end">
        {{ $products->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection
