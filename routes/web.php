<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\ContactController;

Route::namespace('Site')->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name('site.home');

    Route::get('produtos', [CategoryController::class, 'index'])->name('site.products');
    Route::get('produtos/{slug}', [CategoryController::class, 'show'])->name('site.category');

    Route::get('blog', [BlogController::class, 'index'])->name('site.blog');

    Route::view('sobre', 'site.about.index')->name('site.about');

    Route::get('contato', [ContactController::class, 'index'])->name('site.contact');
    Route::post('contato', [ContactController::class, 'contact'])->name('site.contact.form');
});