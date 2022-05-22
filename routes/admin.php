<?php

use App\Http\Controllers\Admin\A_AuthController;
use App\Http\Controllers\getController;
use App\Http\Controllers\userscontroller;
use App\Http\Controllers\historycontroller;
use App\Http\Controllers\Paramedic\P_AuthController;
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

        Route::get('/user', function () {
            return view('/user');
        });
        
        Route::get('/History-main', function () {
            return view('/History-main');
        });

        Route::get('/contactUsAdmin', function () {
            return view('/contactUsAdmin');
        });

        Route::get('/contactUsAdmin', [getController::class,'index']);

        route::get('/home',[P_AuthController::class,'index']);
        // route::get('/login',[P_AuthController::class,'index']);
        Route::get('/delete/{id}',[P_AuthController::class,'delete']);

        route::get('/user',[userscontroller::class,'index']);

        Route::get('/History-main',[historycontroller::class,'index']);
    });
});


