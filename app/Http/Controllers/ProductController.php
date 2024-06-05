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

    public function gundam()
    {
        $products = Product::all();
        return view('goods.gundam', compact('products'));
    }

    public function product()
    {
        $products = Product::all();
        return view('product', compact('products'));
    }
}