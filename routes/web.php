<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\usercontroller;
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

Route::get('/login', function () {
    return view('login');
});

Route::post('/login',[App\Http\Controllers\usercontroller::class, 'login']);


Route::get('/signup', function () {
    return view('signup');
});



Route::post('/signup',[App\Http\Controllers\usercontroller::class, 'signup']);
Route::view('/signup',[App\Http\Controllers\usercontroller::class, 'signup']);

Route::view('/srchout',[App\Http\Controllers\usercontroller::class, 'srchout']);

Route::view('/figma',[App\Http\Controllers\usercontroller::class, 'figma']);
