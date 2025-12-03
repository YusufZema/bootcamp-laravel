<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\taskController;


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
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'index'])->name("profile.index");
//     Route::post('/profile', [ProfileController::class, 'store'])->name("profile.store");
// });

//هاذا الكود من نوف بوست لي الوقت في المتصفح
Route::get('/dashboard', [UsersController::class, 'dashboard'])->name('dashboard');
Route::post('/user-time', [UsersController::class, 'storeTime'])->name('user.time');

// عرض صفحة إنشاء البروفايل
Route::get('/create-profile', [ProfileController::class, 'index'])->name('profile.create');
// عرض صفحة البروفايل بعد الحفظ
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
// حفظ بيانات البروفايل
Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');





Route::middleware('auth')->group(function() {
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
    Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
    Route::patch('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
    Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
});

