<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderDetailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ProductController::class,'index'])->name('product');
Route::post('/save-products',[ProductController::class, 'save_products'])->name('saveProducts');
Route::get('/delete-products/{id}', [ProductController::class, 'delete_products'])->name('removeProducts');
Route::get('/update-products/{id}', [ProductController::class, 'update_products'])->name('updateProducts');
Route::post('/save-updated-products', [ProductController::class, 'save_updated_products'])->name('saveUpdatedProducts');

Route::get('/supplier',[SupplierController::class,'index'])->name('supplier');

Route::get('/category',[CategoryController::class,'index'])->name('category');

Route::get('/order',[OrderController::class,'index'])->name('order');

Route::get('/customer',[CustomerController::class,'index'])->name('customer');

Route::get('/orderdetail',[OrderDetailController::class,'index'])->name('orderdetail');

