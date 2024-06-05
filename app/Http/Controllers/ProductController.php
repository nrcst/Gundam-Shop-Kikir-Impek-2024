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
        
        $products = $query->paginate(9);

        return view('goods.gundam', compact('products'));
    }
}