<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\TestController;
use App\Models\Flight;
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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::middleware(['posttest'])->group(function(){
    Route::middleware(['posttest','throttle:postratelimit'])->name('post.')->prefix('post')->group(function () {
        Route::get('list', [PostController::class, 'list'])->name('list');
        Route::get('insert', [PostController::class, 'insert'])->name('insert');
        Route::post('store', [PostController::class, 'store'])->name('store');
        Route::get('edit/{post}', [PostController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [PostController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [PostController::class, 'delete'])->name('delete');
    });

    Route::get('qbuilder', [TestController::class, 'qbuilder'])->name('test.qbuilder');
    Route::get('eloquent', [TestController::class, 'eloquent'])->name('test.eloquent');
    Route::get('relation', [TestController::class, 'relation'])->name('test.relation');
    Route::get('/api/flights/{id}', function ($id) {
        return Flight::findOrFail($id);
    });

    Route::get('flight/store', [FlightController::class, 'store'])->name('flight.store');
//Route::redirect('relation', '/qbuilder');
//Route::any('/phpinfo', function () {
//    return phpinfo();
//});

//Route::any('/phpinfo', function (Request $request) {
//    dd($request->all());
//});

//Route::view('/gm', 'greetings', ['name' => 'Taylor']);
//Route::get('/gm/{id}', function ($id) {
//    return 'User '.$id;
//});
//Route::get('/gm/{id}/message/{message?}', [TestController::class, 'gm']);

//Route::get('/gm/{id}/message/{message?}', [TestController::class, 'gm'])
//    ->where('id', '[0-9]+');

//Route::get('/user-profile/{username}/message/{message?}', [TestController::class, 'profile'])
//    ->whereAlphaNumeric('username');

//Route::get('/user-profile/{username}/message/{message?}', [TestController::class, 'profile'])
//    ->whereUuid('message');

//Route::get('/gm/{id}/message/{message?}', [TestController::class, 'gm']);

    Route::get('/gm/{id}/message/{message?}', [TestController::class, 'gm'])->name('gm');
    Route::get('/message-me', [TestController::class, 'messageMe'])->name('msg');
    Route::fallback(function () {
        return "already here";
    });

//});

