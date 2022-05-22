<?php

use App\Http\Controllers\Admin\A_AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('theme:admin')->name('admin.')->group(function () {
    Route::middleware(['guest:admin'])->group(function () {
        Route::view('/login', 'auth.login')->name('login');
        Route::post('/login', [A_AuthController::class, 'store']);Route::view('/register', 'auth.register')->name('register');
        Route::post('/create', [A_AuthController::class, 'create'])->name('create');
    });

    Route::middleware(['auth:admin'])->group(function () {
        Route::post('/logout', [A_AuthController::class, 'destroy'])->name('logout');
        Route::view('/home', 'home')->name('home');
    });
    Route::get('/History-main', function () {
        return view('/History-main');
    });
});

// route::get('/admin/adminHome',[paramedicalController::class,'index']);

// route::get('/admin/adminHome',[paramedicalController::class,'index']);

// Route::get('/admin/History-main',[historycontroller::class,'index']);

Route::get('/admin/user', function () {
    return view('/admin/user');
});

// route::get('/admin/user',[userscontroller::class,'index']);

// Route::get('/admin', [historycontroller::class,'index']);
