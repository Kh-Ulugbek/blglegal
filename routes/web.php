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
        Route::get('document/editor', [Admin\ContractController::class, 'index'])->name('admin.document.editor');
        Route::get('document/editor/edit/{id}', [Admin\ContractController::class, 'edit'])->name('admin.document.editor.edit');
        Route::post('document/editor/update/{id}', [Admin\ContractController::class, 'update'])->name('admin.document.editor.update');
    });
});

require __DIR__.'/auth.php';
