<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KidController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\MyAuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'auth'])->name('login.check');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
Route::get('profile/psw-edit', [ProfileController::class, 'editPassword'])->name('profile.edit.password');
Route::put('profile', [ProfileController::class, 'updatePassword'])->name('profile.update.password');

Route::prefix('admin')
    ->middleware([MyAuthMiddleware::class])
    ->group(function () {
        Route::resource('kids', KidController::class);
});
