<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('dashboard.product.index',['products' => $products]);
    }

    public function create() {

        return view('dashboard.product.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required',
            'description' => 'required',
        ]);

        $newProduct = Product::create($data);

        return redirect()->route('dashboard.product.index');
    }

    public function edit($id) {
        $product = Product::find($id);
        return view('dashboard.product.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required',
            'description' => 'required',
        ]);

        $product->update($data);
        
        return redirect()->route('dashboard.product.index')->with('success', 'Product updated successfully');
    }

    public function delete(Product $product) {
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product deleted successfully');
    }
}
