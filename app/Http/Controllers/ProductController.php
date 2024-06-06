<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home()
    {
        $products = Product::all();
        return view('home', compact('products'));
    }

    public function gundam(Request $request)
    {
        $query = Product::where('category', 'gundam');

        if ($request->has('search')) {
            $query->where(function($q) use ($request) {
                $q->where('name', 'like', "%{$request->search}%")
                  ->orWhere('description', 'like', "%{$request->search}%");
            });
        }

        if ($request->has('sort')) {
            $query->orderBy($request->sort, $request->direction == 'desc' ? 'desc' : 'asc');
        }
        
        $products = $query->paginate(12);

        return view('goods.gundam', compact('products'));
    }
    
    public function product(Request $request)
    {
        $query = Product::query();
        if ($request->has('delete')) {
            $query = Product::find($request->delete);

            if ($query) {
                $query->delete();
                return redirect()->back()->with('success');
            }

            return redirect()->back()->with('error');
        }

        $products = $query->paginate(5);

        return view('products.product', compact('products'));
    }

    public function edit($id)
{
    $product = Product::findOrFail($id);
    return view('products.add_edit', compact('product'));
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|string',
        'stock' => 'required|integer',
        'price' => 'required|numeric',
        'category' => 'required|string|max:255',
    ]);

    Product::where('id', $id)->update($validatedData);

    return redirect()->route('products.product')->with('success');
}

public function add()
{
    return view('products.add_edit');
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|string',
        'stock' => 'required|integer',
        'price' => 'required|numeric',
        'category' => 'required|string|max:255',
    ]);

    Product::create($validatedData);

    return redirect()->route('products.product')->with('success');
}

public function show($id)
{
    $product = Product::findOrFail($id);
    return view('goods.show', compact('product'));
}

public function checkout(Request $request)
    {
        $product = Product::find($request->input('product_id'));
        $quantity = $request->input('quantity');

        $totalPrice = $product->price * $quantity;
        $shippingCost = 15000;
        $shippingInsurance = 5500;
        $serviceFee = 1000;
        $applicationServiceFee = 1000;
        $totalBill = $totalPrice + $shippingCost + $shippingInsurance + $serviceFee + $applicationServiceFee;

        return view('goods.summary', [
            'product' => $product,
            'quantity' => $quantity,
            'totalPrice' => $totalPrice,
            'shippingCost' => $shippingCost,
            'shippingInsurance' => $shippingInsurance,
            'serviceFee' => $serviceFee,
            'applicationServiceFee' => $applicationServiceFee,
            'totalBill' => $totalBill,
        ]);
    }

    public function confirmCheckout(Request $request)
{
    $product = Product::find($request->input('product_id'));
    $quantity = $request->input('quantity');

    if ($product->stock >= $quantity) {
        $product->stock -= $quantity;
        $product->save();
        
        return redirect('/service/product/gundam')->with('success', 'Checkout successful. Thank you for your purchase!');
    } else {
        return redirect()->back()->with('error', 'Not enough stock available.');
    }
}

}