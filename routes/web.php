<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users', [\App\Http\Controllers\UserController::class,'index']);
Route::get('/user/{id}', [\App\Http\Controllers\UserController::class,'get']);
Route::post('/store-user', [\App\Http\Controllers\UserController::class,'store']);
Route::get('/resume/{id}', [\App\Http\Controllers\PdfGeneratorController::class, 'index']);
Route::get('/user_create', [UserController::class, 'createUser']);


