<?php

use App\Http\Controllers\HomeConroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::controller(HomeConroller::class)->group(function(){

    Route::post('loginuser','loginuser')->name('loginuser');

});
