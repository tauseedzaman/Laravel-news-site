<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SubscriberController;
use App\Models\posts;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(['auth'])->group(function () {

    Route::get('/contact-us', [ContactController::class,'index'])->name('contactus');
    Route::post('/contact-us', [ContactController::class,'store'])->name('contactus.store');
    Route::get('/about-us', [AboutController::class,'index'])->name('aboutus');
    Route::get('/posts/{slug}', [PostsController::class,'show'])->name('post');
    Route::get('/post-comment/{post_id}', [CommentsController::class,'show'])->name('post-comments');
    Route::post('/comment', [CommentsController::class,'store'])->name('comment');
    Route::get('/categories', [CategoryController::class,'index'])->name('categories');
    Route::get('/categories/{cat}', [CategoryController::class,'show'])->name('category_posts');


    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard', [
            'posts' => posts::latest()->with(['author','category'])->get()
        ]);
    })->name('dashboard');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'posts' => posts::latest()->with(['author','category'])->get()
        ]);
    })->name('welcome');
});

Route::post('/subscribe-news',[SubscriberController::class,'store'])->name('subscribe');

require __DIR__.'/auth.php';
