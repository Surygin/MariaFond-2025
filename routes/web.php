<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KidController;
use App\Http\Middleware\MyAuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'auth'])->name('login.check');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('admin')
    ->middleware([MyAuthMiddleware::class])
    ->group(function () {
        Route::resource('kids', KidController::class);
});
