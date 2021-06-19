<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('inizio');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('admin.index');

    /*----------- corsi -------------*/
    Route::get('/courses', [AuthController::class, 'courses'])->name('admin.courses');
    Route::get('courses/elimina/{id}', [AuthController::class, 'courseDelete'])->name('admin.course.delete');
    Route::post('courses/', [AuthController::class, 'courseAdd'])->name('admin.course.add');

    /*----------- trainer -------------*/
    Route::get('/trainers', [AuthController::class, 'trainers'])->name('admin.trainers');
    Route::get('trainers/elimina/{id}', [AuthController::class, 'trainersDelete'])->name('admin.trainer.delete');
    Route::post('trainers/', [AuthController::class, 'trainersAdd'])->name('admin.trainer.add');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
