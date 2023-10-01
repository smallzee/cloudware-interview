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
    });
});
