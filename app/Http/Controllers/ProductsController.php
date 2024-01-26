<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsHomeController extends Controller
{
    public function index()
    {
        $products = Product::all(); 
        return view('products.index',['products' => $products]);
    }
}
