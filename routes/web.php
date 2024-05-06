<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/template', function () {
    return view('template');
})->name('template');

Route::resource('user', Controllers\UserController::class)
    ->scoped([
        'user' => 'slug',
    ])
    ->names([
        'inde' => 'user.index',
        'create' => 'user.create',
        'store' => 'user.store',
        'show' => 'user.show',
        'edit' => 'user.edit',
        'update' => 'user.update',
        'destroy' => 'user.delete',
    ]);

Route::resource('category', Controllers\CategoryController::class)
    ->scoped([
        'category' => 'slug',
    ])
    ->names([
        'inde' => 'category.index',
        'create' => 'category.create',
        'store' => 'category.store',
        'show' => 'category.show',
        'edit' => 'category.edit',
        'update' => 'category.update',
        'destroy' => 'category.delete',
    ]);

Route::resource('tag', Controllers\TagController::class)
    ->scoped([
        'tag' => 'slug',
    ])
    ->names([
        'inde' => 'tag.index',
        'create' => 'tag.create',
        'store' => 'tag.store',
        'show' => 'tag.show',
        'edit' => 'tag.edit',
        'update' => 'tag.update',
        'destroy' => 'tag.delete',
    ]);

Route::resource('article', Controllers\ArticleController::class)
    ->scoped([
        'article' => 'slug',
    ])
    ->names([
        'inde' => 'article.index',
        'create' => 'article.create',
        'store' => 'article.store',
        'show' => 'article.show',
        'edit' => 'article.edit',
        'update' => 'article.update',
        'destroy' => 'article.delete',
    ]);
