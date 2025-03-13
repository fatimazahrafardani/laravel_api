<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::middleware('api')->group(function () {
    Route::get('/contact', [ContactController::class, 'index']);
    Route::post('/contact', [ContactController::class, 'store']);
    Route::get('/contact/{id}',[ContactController::class , 'edit']);   
    Route::post('/contact/{id}',[ContactController::class , 'update']);
    Route::delete('/contact/{id}', [ContactController::class, 'destroy']);
 
});
