<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\externalLinks;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\tweetController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [DashboardController::class, 'index'])->name('dashboardPage');

Route::get('/tweets/{tweet}', [TweetController::class, 'show'])->name('tweets.show');

Route::get('/tweets/{tweet}/edit', [TweetController::class, 'edit'])->name('tweets.edit')->middleware('auth');

Route::put('/tweets/{tweet}/edit', [TweetController::class, 'update'])->name('tweets.update')->middleware('auth');

Route::post('/tweets', [TweetController::class, 'store'])->name('tweets.store');

Route::delete('/tweet/{tweetID}', [TweetController::class, 'destroy'])->name('tweets.destroy')->middleware('auth');

Route::post('/tweets/{tweet}/comments', [CommentController::class, 'store'])->name('tweets.comments.store')->middleware('auth');

Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/register', [AuthController::class, 'store']);

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'authenticate']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/terms', function() {
    return view('term');
})->name('terms');
