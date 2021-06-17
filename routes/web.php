<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\ContactController;

Route::namespace('Site')->group(function() {
    Route::get('/', [HomeController::class, 'index']);

    Route::get('produtos', [CategoryController::class, 'index']);
    Route::get('produtos/{slug}', [CategoryController::class, 'show']);

    Route::get('blog', [BlogController::class, 'index']);

    Route::view('sobre', 'site.about.index');

    Route::get('contato', [ContactController::class, 'index']);
    Route::post('contato', [ContactController::class, 'contact']);
});