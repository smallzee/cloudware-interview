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
Auth::routes();

Route::get('/', function () {
    $page_title = "Home";
    return view('home',compact('page_title'));
});


Route::group(['prefix'=>'user'], function (){
    Route::middleware(['IsUser'])->group(function (){
        Route::resource('dashboard', \App\Http\Controllers\user\DashboardController::class);
        Route::resource('transfer', \App\Http\Controllers\user\TransferController::class);
        Route::resource('transactions', \App\Http\Controllers\user\TransactionController::class);
        Route::resource('sunset-sunrise', \App\Http\Controllers\user\SunsetSunriseController::class);
    });

    Route::get('/logout', function () {
        auth()->logout();
        return redirect(route('login'))->with('alert_success','You have successfully logged out');
    });
});
