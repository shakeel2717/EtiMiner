<?php

use App\Http\Controllers\user\ProfileController;
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\InvestController;
use Illuminate\Support\Facades\Route;


Route::redirect('/', '/login');

Route::prefix('user/')->middleware('auth', 'user', 'verified')->name('user.')->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::post('/profile/password/update', [ProfileController::class, 'passwordUpdate'])->name('profile.password.update');
    Route::get('/profile/password', [ProfileController::class, 'password'])->name('profile.password');
    Route::resource('profile', ProfileController::class);
    Route::resource('invest', InvestController::class);
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
