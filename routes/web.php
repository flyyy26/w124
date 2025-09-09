<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('index');
});
Route::get('/blog', [ArticleController::class, 'index'])->name('article.index');
Route::get('/blog/{slug}', [ArticleController::class, 'show'])->name('article.show');