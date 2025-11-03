<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route:: get('/',[HomeController::class, 'home'] );
Route:: get('login',[Authcontroller::class, 'login'] );
Route:: get('register',[Authcontroller::class, 'register'] );
Route::get('forgot-password', [AuthController::class, 'forgot']);
