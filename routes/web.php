<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});




Route::get('/cars/{slug}', [CarController::class, 'show']);

Route::post('/cars/{slug}/edit', [CarController::class, 'edit']);


Route::get('/cars', [CarController::class, 'displayCars']);

Route::get('/cars/create', [CarController::class, 'index'])->name('cars')->middleware('auth');

Route::post('/cars/create', [CarController::class, 'store']);


Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

