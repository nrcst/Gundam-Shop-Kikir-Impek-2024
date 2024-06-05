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
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->category }}</p>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                        @if($product->discount)
                            <p class="card-text">Discount: {{ $product->discount }}%</p>
                        @endif
                        <p class="card-text">Stock: {{ $product->stock }}</p>
                        <p class="card-text">{{ $product->preorder ? 'Preorder' : 'Buy now' }}</p>
                        <a href="#" class="btn btn-primary">{{ $product->preorder ? 'Preorder' : 'Buy now' }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-end">
        {{ $products->links('pagination::bootstrap-4') }}
    </div>
</div>
</div>

@endsection