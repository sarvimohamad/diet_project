<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DietController;
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

Route::get('/',[DietController::class, 'index'])->name('dashboard')->middleware('auth');
//Route::middleware('CheckLogin')->group(function (){
Route::view('login', 'login')->name('login')->middleware('CheckLogin');
//});
Route::view('register', 'register')->name('register')->middleware('CheckLogin');
Route::view('verify/{hash}/{mobile}', 'verify')->name('verify')->middleware('CheckLogin');



Route::post('register', [AuthController::class, 'register'])->name('api.register');
Route::post('login', [AuthController::class, 'login'])->name('api.login');
Route::post('verify', [AuthController::class, 'verify'])->name('api.verify');
Route::get('logout', [AuthController::class, 'logout'])->name('api.logout');

//Route::get('/{id}', [AuthController::class, 'index'])->name('index');
Route::get('profile/{id}', [AuthController::class, 'show'])->name('show');

Route::post('/cart', [CartController::class, 'addCart'])->name('addCart');
Route::get('/cart/list', [CartController::class, 'listCart'])->name('listCart');
//Route::get('cart/list/{user_id}', [\App\Http\Controllers\CartController::class, 'index'])->name('indexCart');

Route::get('diet/create' , [\App\Http\Controllers\DietController::class, 'create'])->name('diet.create');
Route::post('diet/store' , [\App\Http\Controllers\DietController::class, 'store'])->name('diet.store');
Route::get('diet/detail/{id}' , [\App\Http\Controllers\DietController::class, 'show'])->name('diet.show');
Route::get('diet/delete/{id}' , [\App\Http\Controllers\DietController::class, 'destroy'])->name('diet.destroy');
Route::get('diet/undo/{id}' , [\App\Http\Controllers\DietController::class, 'undo'])->name('diet.undo');
