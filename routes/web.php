<?php

use App\Http\Controllers\KidController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kids', [KidController::class, 'index']);
Route::get('/kid/{id}', [KidController::class, 'show']);
