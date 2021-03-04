<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceLikeController;
use App\Http\Controllers\UserServiceController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')
->middleware('auth');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::post('/service', [ServiceController::class, 'store']);

Route::delete('/service/{post}', [ServiceController::class, 'destroy'])->name('service.destroy');

Route::post('/service/{post}/likes', [ServiceLikeController::class, 'store'])->name('service.likes')
->middleware('auth');

Route::delete('/service/{post}/likes', [ServiceLikeController::class, 'destroy'])->name('service.likes');

Route::get('/users/{user:username}/service', [UserServiceController::class, 'index'])->name('users.service');

Route::get('/posts', function () {
    // return view('welcome');
    return view('posts.index');
});
