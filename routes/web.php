<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/random', [HomeController::class, 'random']);
Route::get('/{comic}', [HomeController::class, 'show']);
