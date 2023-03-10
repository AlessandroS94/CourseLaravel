<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::get('/ciao', function () {
    return "bho";
});

Route::get('/metodo/{id}',[IndexController::class,'index']);

Route::get('/ciao2',[IndexController::class,'returnView']);

Route::get('/ciao3',[IndexController::class,'view3']);






