<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\TestController;

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
Route::apiResource('colors', ColorController::class)->except([
    'show'
]);
Route::post('check-req/{id}', [TestController::class, 'checkReq'])->name('test.chkReq');
Route::get('json-req', [TestController::class, 'jsonReq'])->name('test.jsonReq');
Route::get('get-flights', [TestController::class, 'getFlights']);
Route::get('get-colors', [TestController::class, 'getColors']);
Route::post('save-color', [TestController::class, 'saveColor']);
