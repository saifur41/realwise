<?php

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



Route::group(['middleware' => ['web']], function () {
    
    Route::get('login', function () { return view('login'); });
    Route::post('backend_login','App\Http\Controllers\AuthController@adminLogin' );
});

Route::group(['middleware' => ['admin']], function () {
    Route::get('dashboard', function () { return view('dashboard'); });
});
