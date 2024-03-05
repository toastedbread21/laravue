<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Navigation

Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/', function () {
    return view('home');
})->middleware('auth');
Route::get('/users', function () {
    return view('users');
})->middleware('auth');


//backend
Route::post('/auth',[AuthController::class,'auth']);
Route::post('/store',[AuthController::class,'store']);
Route::get('/logout',[AuthController::class,'logout']);
Route::get('/fetch',[UserController::class,'fetch']);