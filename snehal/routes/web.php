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



Route::get('/category/list', [Category::class, "list"]);
Route::get('/customer/list', [Customer::class, "list"]);
