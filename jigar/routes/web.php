<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\TestingDB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\PhoneController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
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

Route::get('/category/list', [CategoryController::class, 'list']);
Route::get('/category/insert', [CategoryController::class, 'insert'])->name('category.insert');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');


Route::get('/customer/list', [CustomerController::class, 'list']);
Route::get('/customer/insert', [CustomerController::class, 'insert'])->name('customer.insert');
Route::post('/customer/store', [CustomerController::class, 'store'])->name('customer.store');
Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::put('/customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::delete('/customer/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');

Route::middleware(['propertytest','throttle:propertyratelimit'])->prefix('property')->name('property.')->group(function () {
    Route::get('list', [PropertyController::class, 'list']);
    Route::get('insert', [PropertyController::class, 'insert'])->name('insert');
    Route::post('store', [PropertyController::class, 'store'])->name('store');
    Route::get('edit/{property}', [PropertyController::class, 'edit'])->name('edit')->missing(function (Request $request) {
        // return Redirect::route('property.list');
        return "helo";
        // return redirect()->route('property.list');
    });
    Route::put('update/{property}', [PropertyController::class, 'update'])->name('update');
    Route::delete('delete/{property}', [PropertyController::class, 'delete'])->name('delete');
});

Route::get('/contacts/list', [ContactController::class, 'list']);
Route::get('/contacts/insert', [ContactController::class, 'insert'])->name('contacts.insert');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/contacts/edit/{id}', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('/contacts/update/{id}', [ContactController::class, 'update'])->name('contacts.update');
Route::delete('/contacts/delete/{id}', [ContactController::class, 'delete'])->name('contacts.delete');

Route::get('qbuilder', [TestingDB::class, 'qbuilder']);
Route::get('eloquent', [TestingDB::class, 'eloquent']);
Route::get('relation', [TestingDB::class, 'relation']);
Route::get('/server', TestingDB::class);
Route::get('di', [TestingDB::class, 'checkDI'])->name('test.di');
//Route::get('check-req/{id}', [TestingDB::class, 'checkReq'])->name('test.chkReq');
Route::get('set-cookie', [TestingDB::class, 'setCookie'])->name('test.setCookie');
Route::get('get-cookie', [TestingDB::class, 'getCookie'])->name('test.getCookie');
//Route::resource('colors', ColorController::class)->except([
//    'show'
//]);

//Route::resource('colors', ColorController::class);
//Route::apiResource('colors', ColorController::class);

// Route::fallback(function () {
//     return "Your route is not found";
// });






//Route::resource('user.phone', PhoneController::class);

//Route::resource('user.phone', PhoneController::class)->shallow();

//Route::resource('user.phone', PhoneController::class)->parameters([
//    'user' => 'admin_user'
//]);

//Route::resource('user.phone', PhoneController::class)->scoped([
//    'phone' => 'slug'
//]);









// Route::get('gm', [TestingDB::class, 'gm']);
// Route::get('/greeting', function () {
//     return 'Hello World';
// });

// Route::any('/phpinfo', function (){
//     return phpinfo();
// });

// Route::redirect('relation', '/qbuilder');

// Route::view('/gm', 'greetings', ['name' => 'jigar']);


// Route::get('/gm/{id}', function ($id) {
//    return 'User '.$id;
// });
// Route::get('/gm/{id}/message/{message?}', [TestingDB::class, 'gm']);

// Route::get('/gm/{id}/message/{message?}', [TestingDB::class, 'gm'])
//    ->where('id', '[0-9]+');

// Route::get('/user-profile/{username}/message/{message?}', [TestingDB::class, 'profile'])
//     ->whereAlphaNumeric('username');

// Route::get('/user-profile/{username}/message/{message?}', [TestingDB::class, 'profile'])
//    ->whereUuid('message');

// Route::get('/gm/{id}/message/{message?}', [TestingDB::class, 'gm']);

// Route::get('/gm/{id}/message/{message?}', [TestingDB::class, 'gm'])->name('gm');
// Route::get('/message-me', [TestingDB::class, 'messageMe'])->name('msg');


// Route::get('/user/{name}', function ($name) {
//     //
// })->('name');
