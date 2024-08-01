<?php


use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductConroller;
use Illuminate\Support\Facades\Route;

Route::apiResource('products',ProductConroller::class);
// Route::post('/register',[AuthController::class,'registers']);

Route::controller(AuthController::class)->group(function(){
    Route::post('register','register');

});

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
