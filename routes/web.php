<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;

Route::get('/', function () {
    return view('welcome');
});

Route:: get('login',[Authcontroller::class, 'login'] );
Route:: get('register',[Authcontroller::class, 'register'] );
Route::get('forgot-password', [AuthController::class, 'forgot']);
