<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\IntakeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'home'])->name('home');
Route::get('intake', [IntakeController::class, 'intakeForm'])->name('intakeForm');

Route::middleware('auth')->group(function () {
    Route::middleware('role:admin')->prefix('admin')->group(function () {
        Route::get('dashboard', [Admin\IndexController::class, 'index'])->name('admin.dashboard');
        Route::get('document/editor', [Admin\IndexController::class, 'documentEditor'])->name('admin.document.editor');
    });
});

require __DIR__.'/auth.php';
