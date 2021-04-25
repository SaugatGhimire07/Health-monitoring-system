<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorDataController;

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

Route::get('/new-login', function() {
    return view('newLogin');
});

Route::get('/new-registration', function() {
    return view('newRegistration');
});

Route::get('/forget-pwrd', function() {
    return view('forgetPwrd');
});

Route::get('/dashboard', function() {
    return view('userDashboard');
});

Route::get('/', function() {
    return view('welcome');
});

Route::get('/analytics',[App\Http\Controllers\SensorDataController::class,'analyticsdata']);

Route::get('/home',[App\Http\Controllers\SensorDataController::class,'index']);

Route::get('/profile',[App\Http\Controllers\SensorDataController::class,'mindata']);

polaRoute::get('/ecgChart',[App\Http\Controllers\SensorDataController::class,'ecgChart']);

Auth::routes();


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
