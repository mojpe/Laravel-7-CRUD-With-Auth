<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Product;

class DashboardController extends Controller
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
        $products = Product::all();
        return view('dashboard.index' , ['products' => $products]);
    }
}