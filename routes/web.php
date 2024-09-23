<?php

use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\PointController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/english', function () {
    return view('english');
})->name('english');

Route::get('/dashboard', [PointController::class, 'index'])->middleware(['auth','verified'])->name('dashboard');
Route::get('/kamus', [PointController::class, 'kamus'])->middleware(['auth','verified'])->name('kamus');
Route::get('/dictionary', [PointController::class, 'dictionary'])->middleware(['auth','verified'])->name('dictionary');
Route::get('/leaderboard', [LeaderboardController::class, 'index'])->middleware(['auth','verified'])->name('leaderboard');
Route::get('/user-level,', [PointController::class,'UserLevel'])->name('user.level');
Route::post('/addpoints', [PointController::class,'AddPoints'])->name('user.points');
Route::post('/profilepicture', [ProfileController::class,'UploadPicture'])->name('user.picture');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
