<?php

use App\Http\Controllers\Paramedic\P_AuthController;
use App\Http\Controllers\userscontroller;
use App\Http\Controllers\historyController;
use App\Http\Controllers\getController;
use Illuminate\Support\Facades\Route;

Route::prefix('paramedic')->middleware('theme:paramedic')->name('paramedic.')->group(function () {
    Route::middleware(['guest:paramedic'])->group(function () {
        Route::view('/login', 'auth.login')->name('login');
        Route::post('/login', [P_AuthController::class, 'store']);
        Route::post('/create', [P_AuthController::class, 'create'])->name('create');
    });
    
    Route::middleware(['auth:paramedic'])->group(function () {
        Route::post('/logout', [P_AuthController::class, 'destroy'])->name('logout');
        Route::view('/home', 'home')->name('home');
        Route::get('/home', [P_AuthController::class,'show']);
        
        Route::get('/arrived', function () {
            return view('/arrived');
        });
        Route::get('/current-user-medical-history', function () {
            return view('/current-user-medical-history');
        });

        // Route::get('/after-paramedic-accept-request', function () {
        //     return view('/after-paramedic-accept-request');
        // });
        // route::get('/after-paramedic-accept-request/{id}/{historyID}',[usersController::class,'destroy']);
        
        Route::get('/profile', [P_AuthController::class,'showpara']);
        Route::post('/update', [P_AuthController::class,'update']);

        route::get('/after-paramedic-accept-request/{id}/{historyID}',[usersController::class,'index_para']);


        Route::get('/get-in-touch', function () {
            return view('get-in-touch');
        });
        Route::post('store-get-para', [getController::class,'store_para']);
        Route::get('home',[historycontroller::class,'showReq']);
    });
});