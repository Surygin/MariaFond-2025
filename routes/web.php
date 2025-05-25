<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testo', [TestoController::class, 'testo']);
