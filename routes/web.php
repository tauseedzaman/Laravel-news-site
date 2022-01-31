<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Models\posts;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'posts' => posts::latest()->paginate(50)
    ]);
})->name('welcome');

Route::get('/contact-us', [ContactController::class,'index'])->name('contactus');
Route::post('/contact-us', [ContactController::class,'store'])->name('contactus.store');
Route::get('/about-us', [AboutController::class,'index'])->name('aboutus');
Route::get('/categories', [CategoryController::class,'index'])->name('categories');
Route::get('/categories/{category}', [CategoryController::class,'show'])->name('category_posts');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
