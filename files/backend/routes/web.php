<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClothingItemController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/items', [ClothingItemController::class, 'index']);
    Route::post('/items', [ClothingItemController::class, 'store']);
    Route::put('/items/{id}', [ClothingItemController::class, 'update']);
    Route::delete('/items/{id}', [ClothingItemController::class, 'destroy']);
});