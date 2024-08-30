<?php

use App\Http\Controllers\CartoonController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Комиксы
Route::get('/', [CartoonController::class, 'index']);
Route::get('/cartoons', [CartoonController::class, 'index'])->name('cartoons.index');
Route::get('/cartoons/{cartoon}', [CartoonController::class, 'show'])->name('cartoons.show');

// Категории комиксов
Route::get('/cartoons/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

// Главы комиксов
Route::get('/cartoons/{cartoon}/chapters/{chapter}',
    [ChapterController::class, 'show'])->name('chapters.show');

// Профиль пользователя
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
