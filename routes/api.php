<?php


use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductConroller;
use Illuminate\Support\Facades\Route;

Route::apiResource('products',ProductConroller::class);
// Route::post('/register',[AuthController::class,'registers']);

Route::controller(AuthController::class)->group(function(){
    Route::post('register','register');
    Route::post('login','login');
    Route::get('user','userProfile')->middleware('auth:sanctum');
    Route::get('logout','userLogout')->middleware('auth:sanctum');

});

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
