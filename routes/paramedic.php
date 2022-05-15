<?php

use App\Http\Controllers\Paramedic\P_AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('paramedic')->middleware('theme:paramedic')->name('paramedic.')->group(function () {
    Route::middleware(['guest:paramedic'])->group(function () {
        Route::view('/login', 'auth.login')->name('login');
        Route::view('/register', 'auth.register')->name('register');
        Route::post('/login', [P_AuthController::class, 'store']);
        Route::post('/create', [P_AuthController::class, 'create'])->name('create');
    });

    Route::middleware(['auth:paramedic'])->group(function () {
        Route::post('/logout', [P_AuthController::class, 'destroy'])->name('logout');
        Route::view('/home', 'home')->name('home');
    });
});