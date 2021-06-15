<?php

use App\Http\Controllers\AuthController;
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

Route::get('/',[AuthController::class, 'index'])->middleware('auth')->name('dashboard');

Route::view('login', 'login')->name('login');
Route::view('register', 'register')->name('register');
Route::view('verify/{hash}/{mobile}', 'verify')->name('verify');


Route::post('register', [AuthController::class, 'register'])->name('api.register');
Route::post('login', [AuthController::class, 'login'])->name('api.login');
Route::post('verify', [AuthController::class, 'verify'])->name('api.verify');
Route::get('logout', [AuthController::class, 'logout'])->name('api.logout');

//Route::get('/{id}', [AuthController::class, 'index'])->name('index');
Route::get('profile/{id}', [AuthController::class, 'show'])->name('show');
