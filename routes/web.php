<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/cars', [CarController::class, 'index']);
Route::get('/cars/create', [CarController::class, 'create']);
Route::post('/cars', [CarController::class, 'store']);

// Edit, Update, Delete
Route::get('/cars/{car}/edit', [CarController::class, 'edit']);
Route::put('/cars/{car}', [CarController::class, 'update']); // ✅ must be PUT
Route::delete('/cars/{car}', [CarController::class, 'destroy']); // ✅ must be DELETE
