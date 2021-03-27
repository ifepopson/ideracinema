<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/viewShowtime/{cinemaId}', [App\Http\Controllers\HomeController::class, 'viewShowtime'])->name('viewShowtime');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {



    Route::post('/admin/addShowtime', [App\Http\Controllers\AdminController::class, 'pushShowTime'])->name('showTimePage');

Route::get('/admin/addShowtime', [App\Http\Controllers\AdminController::class, 'showTimePage'])->name('showTimePage');


Route::get('/signout', [App\Http\Controllers\AdminController::class, 'signout'])->name('signout');


    
});
