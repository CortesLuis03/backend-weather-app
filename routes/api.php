<?php

use App\Http\Controllers\SearchHistoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('weather')->group(function(){
    Route::get('/history', [\App\Http\Controllers\SearchHistoryController::class, 'index']);
    Route::post('/history/save',[App\Http\Controllers\SearchHistoryController::class, 'store']);
});

Route::prefix('city')->group(function(){
    Route::get('/perCountry/{idCountry}', [App\Http\Controllers\CitiesController::class, 'index']);
});

Route::prefix('country')->group(function(){
    Route::get('/list', [App\Http\Controllers\CountriesController::class, 'index']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
