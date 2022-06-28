<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

// TIMERS
// Pomodoro Timer
Route::get('/pomodoro-timer', [App\Http\Controllers\PomodoroController::class, 'index'])->name('index');
// Meditation Timer
Route::get('/meditation-timer', [App\Http\Controllers\MeditationTimerController::class, 'index'])->name('index');

// NEWS
// Positive news
Route::get('/positive-news', [App\Http\Controllers\PositiveNewsController::class, 'index'])->name('index');

// JOURNALS
// Worry Journal
Route::get('/worry-journal', [App\Http\Controllers\WorryJournalController::class, 'index'])->name('index');