<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', App\Http\Controllers\DashboardController::class);

Route::group(['middlewire' => 'auth'], function(){
    Route::resource('accounts', App\Http\Controllers\AccountController::class);
    Route::resource('deposits', \App\Http\Controllers\DepositController::class);
    Route::resource('withdraws', \App\Http\Controllers\WithdrawController::class);
    Route::resource('exchanges', \App\Http\Controllers\ExchangeController::class);
});