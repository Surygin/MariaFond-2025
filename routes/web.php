<?php

use App\Http\Controllers\KidController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/kids', [KidController::class, 'index'])->name('kids');
Route::get('/kid/{id}', [KidController::class, 'show']);
Route::get('/kids/create', [KidController::class, 'create'])->name('kids.create');
Route::post('/kids/store', [KidController::class, 'store'])->name('kids.store');
Route::get('/kids/{kid}/edit', [KidController::class, 'edit'])->name('kids.edit');
Route::put('/kids/{kid}/update', [KidController::class, 'update'])->name('kids.update');
Route::get('kids/{id}/delete', [KidController::class, 'destroy'])->name('kids.delete');
