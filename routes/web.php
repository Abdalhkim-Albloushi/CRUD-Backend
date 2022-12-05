<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('user', [UserController::class,'getData'], );
// Route::get('product', [UserController::class,'getProduct'], );


// Route::controller(UserController::class)->group(function(){
//     Route::get('user','getData');
//     Route::get('product','getProduct');
// });

// Route::resource('test', TestingController::class)->only([
//     'create'
// ]);


Route::controller(ProductController::class)->group(function (){
    Route::get('product','index')->name('product.all');
    Route::get('product/create','create');
    Route::get('product/edit/{id}',[ProductController::class, 'edit'])->name('product.edit');
Route::get('product/delete/{id}', 'delete')->name('product.delete');

Route::post('product/insert',  'insert')->name('product.insert');
Route::post('product/update/{id}', 'update')->name('product.update');
});

// Route::get('product',[ProductController::class,'index'])->name('product.all');
// Route::get('product/create', [ProductController::class, 'create']);
// Route::get('product/edit/{id}',[ProductController::class, 'edit'])->name('product.edit');
// Route::get('product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');

// Route::post('product/insert', [ProductController::class, 'insert'])->name('product.insert');
// Route::post('product/update/{id}', [ProductController::class, 'update'])->name('product.update');

