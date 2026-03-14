<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarController;


Route::get('/test-car', [HomeController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});


Route::get('/cars', [CarController::class, 'index']);
Route::get('/cars/create', [CarController::class, 'create']);
Route::post('/cars', [CarController::class, 'store']);