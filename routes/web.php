<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AfrindController;
use App\Http\Controllers\PlanController;

Route::get('/', function () {
    return view('welcome');
});



Route::get("regastr", [UsersController::class , "index"]);
Route::post("regastr", [UsersController::class , "regastr"]);
Route::get("dashboard", [UsersController::class , "dashboard"])
    ->middleware("auth");
Route::get("login", [UsersController::class , "login_view"])->name('login');
Route::post("login", [UsersController::class , "login"]);
Route::get("logout", [UsersController::class , "logout_view"])->name('logout.view');
Route::post('/logout', [UsersController::class, 'logout'])->name('logout');



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
// تحريب
// عرض صفحة إنشاء البروفايل
Route::get('/create-profile', [ProfileController::class, 'index'])->name('profile.create')->middleware('auth');
// عرض صفحة البروفايل بعد الحفظ
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show')->middleware('auth');
// حفظ بيانات البروفايل
Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store')->middleware('auth');





Route::middleware('auth')->group(function() {
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
    Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
    Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

    Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
    Route::patch('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');

    Route::get('/plans', [PlanController::class, 'index'])->name('plans.index');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/friends', [AfrindController::class, 'index'])->name('friends.index');
    Route::post('/friends/{user}/add', [AfrindController::class, 'addFriend'])->name('friends.add');
});


///////Courses
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');




///frinds
