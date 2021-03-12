<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\TestingDB;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('check-req/{id}', [TestingDB::class, 'checkReq'])->name('test.chkReq');
//Route::apiResource('colors', ColorController::class)->except([
//    'show'
//]);
Route::get('json-req', [TestingDB::class, 'jsonReq'])->name('test.jsonReq');
Route::get('get-flights', [TestingDB::class, 'getFlights']);
Route::get('get-colors', [TestingDB::class, 'getColors']);
Route::post('save-color', [TestingDB::class, 'saveColor']);



Route::get('get-sizes', [TestingDB::class, 'getSizes']);
Route::post('save-size', [TestingDB::class, 'saveSize']);

