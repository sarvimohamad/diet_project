<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('user/list' , [\App\Http\Controllers\AuthController::class,'UserApi']);
Route::get('diet/list' , [\App\Http\Controllers\DietController::class,'DietApi']);
Route::post('diet/create' , [\App\Http\Controllers\DietController::class,'DietCreateApi'])->middleware('auth:sanctum');

Route::post('token/create' , [\App\Http\Controllers\UserController::class,'ApiCreateToken']);
