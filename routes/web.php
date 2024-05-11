<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\tweetController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [ DashboardController::class, 'index'])->name('dashboardPage');

Route::get('/tweets/{tweet}', [ tweetController::class, 'show'])->name('tweets.show');

Route::get('/tweets/{tweet}/edit', [ tweetController::class, 'edit'])->name('tweets.edit');

Route::put('/tweets/{tweet}/edit', [ tweetController::class, 'update'])->name('tweets.update');

Route::post('/tweets', [ tweetController::class, 'store'])->name('tweets.store');

Route::delete('/tweet/{tweetID}', [ tweetController::class, 'destroy'])->name('tweets.destroy');

Route::post('/tweets/{tweet}/comments', [ CommentController::class, 'store'])->name('tweets.comments.store');

Route::get('/terms', function(){
    return view('term');
});