<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClientController;


Route::resource('items', ItemController::class);
Route::resource('categories', CategoryController::class);
Route::resource('suppliers', SupplierController::class);
Route::resource('brands', BrandController::class);
Route::resource('dashboard', DashboardController::class);
Route::resource('clients', ClientController::class);





Route::get('/', [ItemController::class, 'index'])->name('items')    ; 

