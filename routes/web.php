<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\SocialLinkController;
use App\Http\Controllers\Admin\NewsController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/berita', [HomeController::class, 'allNews'])->name('news.all');
Route::get('/links/{category}', [HomeController::class, 'showLinks'])->name('links.show');

// Alias untuk login agar Laravel Auth menemukannya
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
    });
    
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

    Route::middleware('auth')->group(function () {
        Route::resource('social-links', SocialLinkController::class)->names('social-links');
        Route::patch('social-links/{socialLink}/toggle', [SocialLinkController::class, 'toggle'])->name('social-links.toggle');
        
        // News Management
        Route::resource('news', NewsController::class)->names('news');
    });
});
