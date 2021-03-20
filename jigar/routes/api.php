<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ColorController;
use App\Http\Controllers\Api\SizeController;
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
Route::apiResource('colors', ColorController::class);
Route::apiResource('sizes', SizeController::class);

Route::post('check-req/{id}', [TestingDB::class, 'checkReq'])->name('test.chkReq');
//Route::apiResource('colors', ColorController::class)->except([
//    'show'
//]);
Route::get('json-req', [TestingDB::class, 'jsonReq'])->name('test.jsonReq');

Route::get('get-flights', [TestingDB::class, 'getFlight']);


Route::get('get-colors', [TestingDB::class, 'getColors']);
Route::post('save-color', [TestingDB::class, 'saveColor']);
Route::get('fetch-color/{color}', [TestingDB::class, 'fetchColor']);


Route::get('get-roles', [TestingDB::class, 'getRoles']);
Route::post('save-role', [TestingDB::class, 'saveRole']);


Route::get('get-sizes', [TestingDB::class, 'getSizes']);
Route::post('save-size', [TestingDB::class, 'saveSize']);
Route::post('update-size/{size}', [TestingDB::class, 'updateSize']);
Route::get('fetch-size/{size}', [TestingDB::class, 'fetchSize']);

