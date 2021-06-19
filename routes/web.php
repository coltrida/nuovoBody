<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('inizio');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('admin.index');
    Route::get('/corsi', [AuthController::class, 'corsi'])->name('admin.corsi');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
