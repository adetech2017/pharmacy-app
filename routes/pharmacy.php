<?php

use App\Http\Controllers\Pharmacy\AuthController;
use App\Http\Controllers\Pharmacy\DashboardController;
use App\Http\Controllers\Pharmacy\ProductController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Pharmacy Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => 'pharmacy'], function () {
    //Route::get('dashboard', [DashboardController::class, 'index']);

    Route::get('/dashboard', function () {
        return view('pharmacy.index');
    })->middleware(['auth:pharmacy'])->name('pharmacy.dashboard');

    Route::get('login', [AuthController::class, 'login']);
    Route::get('register', [AuthController::class, 'register']);
    Route::post('create-pharmacy', [AuthController::class, 'create_pharmacy'])->name('create.pharmacy');
    Route::post('auth-pharmacy', [AuthController::class, 'login_auth'])->name('auth.pharmacy');

    Route::get('log-out',[AuthController::class, 'destroy'])->name('auth.logout');

    Route::group(['middleware' => ['auth:pharmacy']], function() {
        // define your route, route groups here
        Route::get('all-medicines', [ProductController::class, 'product'])->name('all.medicines');
        Route::get('new-product', [ProductController::class, 'new_product'])->name('new.product');
        Route::post('add-product', [ProductController::class, 'add_product'])->name('add.product');
        //Route::get('edit-product/{product}', [ProductController::class, 'edit'])->name('product.edit');
        Route::resource('product', ProductController::class);
    });




});



