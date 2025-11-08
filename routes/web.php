<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;

// Authentication routes (from Breeze)
require __DIR__.'/auth.php';

// Protected routes
Route::middleware('auth')->group(function () {
    Route::get('/resume', [ResumeController::class, 'show'])->name('resume');
    Route::get('/edit-resume', [ResumeController::class, 'edit'])->name('edit.resume');
    Route::post('/edit-resume', [ResumeController::class, 'update'])->name('update.resume');
});

// Public view
Route::get('/resume/{id}', [ResumeController::class, 'publicView'])->name('public.resume');
