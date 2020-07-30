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

// routes authentication
Route::namespace('Auth')->group(function() {
    Route::post("/auth", "AuthenticateController")->name("authenticate");
    Route::post("/logout", "LogoutController")->name('logout');
});
