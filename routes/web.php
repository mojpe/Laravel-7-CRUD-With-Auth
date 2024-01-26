<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ProductController;
//use App\Http\Controllers\ProductsHomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Auth\Auth0Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Show a homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Show a list of products
Route::get('/products', [ProductsController::class, 'index'])->name('products.index');

// Lets a user login
Route::get('/login', [Auth0Controller::class, 'login'])->name('login');

// Lets a user logout
Route::get('/logout', [Auth0Controller::class, 'logout'])->name('logout')->middleware('auth');

// Auth0 provided route to handle the login callback
Route::get('/auth0/callback', [Auth0Controller::class, 'callback'])->name('auth0-callback');

// Show a user's dashboard homepage
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Show a user's products in their dashboard
Route::get('/dashboard/products', [DashboardProductController::class, 'index'])->name('dashboard.products');

// Show the page to create a product
Route::get('/dashboard/products/new', [DashboardProductController::class, 'create'])->name('dashboard.products.create');

// Show a single product
Route::get('/dashboard/products/{id}', [DashboardProductController::class, 'show'])->name('dashboard.products.show');

// Show the page to edit a product
Route::get('/dashboard/products/{id}/edit', [DashboardProductController::class, 'edit'])->name('dashboard.products.edit');

//Route::view('/', 'home'); 
//
//Route::get('/products', [ProductsHomeController::class, 'index'])->name('products.index');
//
//Route::get('/auth0/callback', '\Auth0\Login\Auth0Controller@callback' )->name('auth0-callback');
//Route::get('/login', 'Auth\Auth0IndexController@login')->name('login');
//Route::get('/logout', 'Auth\Auth0IndexController@logout')->name('logout')->middleware('auth');


//Route::group(['prefix' => 'dashboard'], function() {
//    Route::view('/', 'dashboard/dashboard');
//    //Route::get('reservations/create/{id}', 'ReservationController@create');
//    //Route::resource('reservations', 'ReservationController')->except('create');
//});

// Product Routes
//Route::get('/dashboard/product', [ProductController::class, 'index'])->name('dashboard.product.index');
//Route::get('/dashboard/product/create', [ProductController::class, 'create'])->name('dashboard.product.create');
//Route::post('/dashboard/product', [ProductController::class, 'store'])->name('dashboard.product.store');
//Route::get('/dashboard/product/{id}/edit', [ProductController::class, 'edit'])->name('dashboard.product.edit');
//Route::put('/dashboard/product/{product}/update', [ProductController::class, 'update'])->name('dashboard.product.update');
//Route::delete('/dashboard/product/{product}/delete', [ProductController::class, 'delete'])->name('dashboard.product.delete');
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
