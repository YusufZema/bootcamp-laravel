<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});



Route::get("regastr", [UsersController::class , "index"]);
Route::post("regastr", [UsersController::class , "regastr"]);
Route::get("dashboard", [UsersController::class , "dashboard"])
    ->middleware("auth");
Route::get("login", [UsersController::class , "login_view"])->name('login');
Route::post("login", [UsersController::class , "login"]);



////
// Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
// Route::post('/profile', [ProfileController::class, 'store'])->name('profile');
// Route::put('/profile', [ProfileController::class, 'update'])->name('profile');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::post('/profile', [ProfileController::class, 'store']);
});
