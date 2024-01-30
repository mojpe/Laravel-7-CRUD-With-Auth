<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;

class DashboardProductController extends Controller
{
    public function __construct()
    {   
        $this->middleware(function ($request, $next) {
            if (!Auth::check()) {
                return redirect('/')->with('error', 'You must be logged in to access the dashboard.');
            }

            return $next($request);
        }); 
    }

    /*public function index()
    {
        // Logic to fetch user's products and pass them to the view
        $userProducts = '';
        return view('dashboard.products.index', compact('userProducts'));
    }*/

    public function show($id)
    {
        $product = Product::find($id);
        return view('dashboard.products.show', compact('product'));
    }

    public function create()
    {
        return view('dashboard.products.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required',
            'description' => 'required',
        ]);

        $newProduct = Product::create($data);

        return redirect()->route('dashboard');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('dashboard.products.edit', compact('product'));
    }

    public function update(Request $request, $id) 
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required',
            'description' => 'required',
        ]);

        $product = Product::find($id);
        $product->update($data);
        return redirect()->route('dashboard')->with('success', 'Product updated successfully');
    }

    public function delete($id) 
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('dashboard')->with('success', 'Product deleted successfully');
    }
}