<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\EmailVerificationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name('home');

Route::resource('login', LoginController::class);
Route::resource('register', RegisterController::class);
Route::post('/login', [LoginController::class, 'login'])->name('login.process');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/email/send-code', [EmailVerificationController::class, 'send']);
Route::post('/email/verify-code', [EmailVerificationController::class, 'verify']);
