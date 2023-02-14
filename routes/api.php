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
    Route::get('/history', [\App\Http\Controllers\SearchHistoryController::class, 'getHistory']);
    Route::post('/history/save',[App\Http\Controllers\SearchHistoryController::class, 'store']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
