<?php

use \App\Http\Controllers\Admin\CartoonController as AdminCartoonController;
use Illuminate\Support\Facades\Route;

// Админ-панель комиксов
Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminCartoonController::class, 'index']);
    Route::resource('/admin/cartoons', AdminCartoonController::class)
        ->name('index', 'admin.cartoons.index')
        ->name('show', 'admin.cartoons.show')
        ->name('create', 'admin.cartoons.create')
        ->name('edit', 'admin.cartoons.edit')
        ->name('store', 'admin.cartoons.store')
        ->name('update', 'admin.cartoons.update')
        ->name('destroy', 'admin.cartoons.delete');
});
