<?php

namespace App\Http\Controllers;

class DashboardProductController extends Controller
{
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
        // Logic to fetch and pass a single product to the view
        $product = '';/* Your logic to fetch a single product */;
        return view('dashboard.products.show', compact('product'));
    }

    public function edit($id)
    {
        // Logic to fetch and pass a single product to the view
        $product = '';/* Your logic to fetch a single product */;
        return view('dashboard.products.edit', compact('product'));
    }
}