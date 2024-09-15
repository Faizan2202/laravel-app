<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
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

Route::get('register', function () {
    return view('register');
});
Route::get('dashboard', function () {
    return view('dashboard')->name('dashboard');
});
Route::get('login', function () {
    return view('Login');
});

Route::post('register',[AuthenticationController::class,'register'])->name('register');
Route::post('login',[AuthenticationController::class,'login'])->name('login');
Route::get('logout',[AuthenticationController::class,'logout'])->name('logout');