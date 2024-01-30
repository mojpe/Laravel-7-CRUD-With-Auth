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

    public function index()
    {
        // Logic to fetch user's products and pass them to the view
        $userProducts = ''; /* Your logic to fetch user's products */;
        return view('dashboard.products.index', compact('userProducts'));
    }

    public function create()
    {
        return view('dashboard.products.create');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('dashboard.products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('dashboard.products.edit', compact('product'));
    }
}