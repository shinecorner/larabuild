<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Category;
use App\Http\Controllers\Customer;

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

//Route::get('/', function () {
//    exit("snehal");
//    return view('welcome');
//});



Route::get('/category/list', [Category::class, "list"])->name('category.list');
Route::get('/category/insert', [Category::class, 'insert'])->name('category.insert');
Route::post('/category/store', [Category::class, 'store'])->name('category.store');
Route::get('/category/edit/{id}', [Category::class, 'edit'])->name('category.edit');
Route::post('/category/update/{id}', [Category::class, 'update'])->name('category.update');
Route::get('/customer/list', [Customer::class, "list"])->name('customer.list');
Route::get('/customer/insert', [Customer::class, 'insert'])->name('customer.insert');
Route::post('/customer/store', [Customer::class, 'store'])->name('customer.store');
Route::get('/customer/edit/{id}', [Customer::class, 'edit'])->name('customer.edit');
Route::post('/customer/update/{id}', [Customer::class, 'update'])->name('customer.update');
