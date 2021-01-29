<?php


use App\Http\Controllers\Category;
use App\Http\Controllers\Customer;
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

Route::get('/', function () {    
    return view('welcome');
    // echo config('app.debug');
    // dd("app.key");
    // [Category::class, 'list']
});

Route::get('/category/list',[Category::class, 'list']);
Route::get('/customer/list',[Customer::class, 'list']);

// Route::get('/user/{name}', function ($name) {
//     //
// })->('name');

