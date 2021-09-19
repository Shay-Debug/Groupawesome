<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\paymentview;
use App\Http\Controllers\tourguests;
use App\Http\Controllers\tourcust;
use App\Http\Controllers\remove_excursion;
use App\Http\Controllers\deletebooking;

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
Route::get('/walkin/{booking?}', 'App\Http\Controllers\GuestController@walkinview');
Route::get('/pay',[paymentview::class,'payment']);
Route::post('/pay',[remove_excursion::class,'excursion_remove']);
Route::get('/tourguest/{booking?}',[tourguests::class,'tourview']);
Route::post('/createtour',[tourcust::class,'maketour']);
Route::post('/deletebooking',[deletebooking::class,'booking_delete']);
Route::post('/create', 'App\Http\Controllers\GuestController@walkin')->name('create');
