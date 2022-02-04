<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostsController;
use App\Models\category;
use App\Models\posts;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;






Route::get('/contact-us', [ContactController::class,'index'])->name('contactus');
Route::post('/contact-us', [ContactController::class,'store'])->name('contactus.store');
Route::get('/about-us', [AboutController::class,'index'])->name('aboutus');

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'posts' => posts::latest()->with(['author','category'])->get()
        ]);
    })->name('welcome');

    Route::get('/posts/{slug}', [PostsController::class,'show'])->name('post');
    Route::post('/comment', [CommentsController::class,'store'])->name('comment');
    Route::get('/categories', [CategoryController::class,'index'])->name('categories');
    Route::get('/categories/{cat}', [CategoryController::class,'show'])->name('category_posts');

});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
