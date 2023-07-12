<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
//     return view('index');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact.us');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/product-details/{slug}', [HomeController::class, 'product_details'])->name('product.details.slug');
Route::get('autocomplete', [HomeController::class, 'autocomplete'])->name('autocomplete');
Route::get('search/', [HomeController::class, 'search'])->name('search');
Route::get('add-to-cart/{id}', [HomeController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [HomeController::class, 'updateCart'])->name('update.cart');
Route::delete('remove-from-cart', [HomeController::class, 'removeCart'])->name('remove.from.cart');


// ----------------User Routes----------------//
Route::get('auth-user', [UserController::class, 'index']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
