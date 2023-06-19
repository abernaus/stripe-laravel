<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get(uri: '/',            action: 'App\Http\Controllers\StripeController@index')->name('index');
Route::post(uri: '/checkout',    action: 'App\Http\Controllers\StripeController@checkout')->name('checkout');
Route::get(uri: '/success',     action: 'App\Http\Controllers\StripeController@success')->name('success');
