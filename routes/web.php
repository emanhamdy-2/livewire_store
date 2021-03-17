<?php

use App\Http\Livewire\CartComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CheckoutComponent;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class);
Route::get('/cart', CartComponent::class);
Route::get('/shop', ShopComponent::class);
Route::get('/checkout', CheckoutComponent::class);

//admin
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
  Route::get('/user/dashboard',UserDashboardComponent::class)
});

//user
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function () {
  Route::get('/admin/dashboard',AdminDashboardComponent::class)
});

