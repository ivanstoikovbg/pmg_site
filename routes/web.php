<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SpecialtyController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/news', [HomeController::class, 'news']);
Route::get('/history', [HomeController::class, 'history']);
Route::get('/documents', [DocumentController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index'])->name('galleries.index');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/teachers', [TeacherController::class, 'index']);
Route::get('/specialties', [SpecialtyController::class, 'index'])->name('specialties.index');
