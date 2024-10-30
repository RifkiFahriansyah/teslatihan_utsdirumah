<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NamaOrangController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/namaOrang', [NamaOrangController::class, 'index']);
Route::post('/namaOrang', [NamaOrangController::class, 'store']);
Route::patch('/namaOrang/{namaOrang}', [NamaOrangController::class, 'update']);
Route::delete('/namaOrang/{namaOrang}', [NamaOrangController::class, 'destroy']);
