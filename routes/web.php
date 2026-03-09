<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'create'])->name('login');
    Route::post('/login', [AuthController::class, 'store'])->name('login.store');
});

Route::post('/logout', [AuthController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::view('/soc/monitoreo', 'sections.soc')->name('soc')->middleware('role:super_admin,admin,analyst,operator');
    Route::view('/inteligencia', 'sections.intel')->name('intel')->middleware('role:super_admin,admin,analyst');
    Route::view('/administracion', 'sections.admin')->name('admin')->middleware('role:super_admin,admin');
});
