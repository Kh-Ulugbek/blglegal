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

        //Intakes
        Route::get('intake', [Admin\IntakeController::class, 'index'])->name('admin.intake');
        Route::post('intake/edit/{id}', [Admin\IntakeController::class, 'edit'])->name('admin.intake.edit');
        Route::delete('intake/delete/{id}', [Admin\IntakeController::class, 'delete'])->name('admin.intake.delete');
    });
});

require __DIR__.'/auth.php';
