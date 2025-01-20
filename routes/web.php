<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
**Public routes
*/
Route::view('/' , 'front.index');
Route::view('/register','front.auth.register')->name('front.register');
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::view('/login' , 'front.auth.login')->name('login');