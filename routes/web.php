<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Paramedic\P_AuthController;
use App\Http\Controllers\historycontroller;
use App\Http\Controllers\userscontroller;
use App\Http\Controllers\medicalhistoryController;
use App\Http\Controllers\soscontactsController;
use App\Http\Controllers\ratethetripController;
use App\Http\Controllers\NIDController;
use App\Http\Controllers\getController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

// request for user

Route::post('request', [historyController::class,'create']);

Route::get('/respondersOnTheWay', function () {
    return view('responders-on-the-way');
});

// End request
// Medical History

Route::get('/medical-history', function () {
    return view('medical-history');
});
Route::get('/medical-history-menu', function () {
    return view('medical-history-menu');
});


Route::post('store-medical', [medicalhistoryController::class,'store']);
Route::post('store-medical-menu', [medicalhistoryController::class,'store_menu']);
// End Medical History

// NID

Route::post('store-nidfront', [NIDController::class,'store_front']);
Route::post('store_selfie', [NIDController::class,'store_selfie']);
Route::post('store-nidback', [NIDController::class,'store_back']);

Route::get('/national-id-front', function () {
    return view('national-id-front');
});
Route::get('/naitonal-id-back', function () {
    return view('naitonal-id-back');
});
Route::get('/national-id-selfie', function () {
    return view('national-id-selfie');
});
// End NID

// User profile

Route::get('/profile', [usersController::class,'edit']);
Route::get('/home', [usersController::class,'show']);
Route::post('update-user', [usersController::class,'update']);

// End User user profile
// Rating

Route::get('/rating', function () {
    return view('rating');
});

Route::get('/rating/{id}', [historyController::class,'show_rate']);

Route::post('rateStore', [historyController::class,'store']);

Route::get('/req-comp-for-user',[historycontroller::class,'index_medical']);

Route::get('/req-details/{id}', [historycontroller::class,'show']);

// End Ratin

Route::get('/sos-add-new-contact', function () {
    return view('sos-add-new-contact');
});
Route::post('store-newContact', [soscontactsController::class,'store']);
Route::get('/sos-contacts',[soscontactsController::class,'index']);
Route::get('delete/{id}',[soscontactsController::class,'delete']);
Route::get('/home',[soscontactsController::class,'showSos']);
Route::get('/success', function () {
    return view('success');
});
// Route::get('/tracking', function () {
//     return view('tracking');
// });
route::get('/tracking/{id}',[P_AuthController::class,'index_para_user']);
route::get('/respondersOnTheWay/{id}',[usersController::class,'tracking']);

// get in touch
Route::get('/get-in-touch', function () {
    return view('get-in-touch');
});

Route::post('store-get', [getController::class,'store']);

// End get 
// Start user routes
Route::get('/choose-user', function () {
    return view('choose-user');
});

Route::get('/arrived', function () {
    return view('arrived-copy');
});

Route::get('/req-details/{id}', [historycontroller::class,'show']);

Route::get('/index', function () {
    return view('index');
});

Route::get('/pass', function () {
    return view('');
});

// --------------------------
require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/paramedic.php';


// Route::get('/firbase/{id}/{historyID}', [userscontroller::class,'firbase']);