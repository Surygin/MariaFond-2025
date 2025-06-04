<?php

use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KidController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestoController;
use App\Http\Middleware\MyAuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'auth'])->name('login.check');


Route::prefix('admin')
    ->middleware([MyAuthMiddleware::class])
    ->group(function () {

        #start profile routes
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
        Route::get('profile/psw-edit', [ProfileController::class, 'editPassword'])->name('profile.edit.password');
        Route::put('profile', [ProfileController::class, 'updatePassword'])->name('profile.update.password');
        #end profile routes

        Route::resource('kids', KidController::class);

        Route::get('/about', [CompanyController::class, 'show'])->name('admin.about');
        Route::post('/about', [CompanyController::class, 'store'])->name('admin.about.store');

        Route::get('/contacts', [TestoController::class, 'testoContacts']);
        Route::get('/requisites', [TestoController::class, 'testoRequ']);
});
