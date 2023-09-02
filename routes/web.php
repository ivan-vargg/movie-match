<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimerController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\MicrosoftController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PrimerController::class, 'index'])->name('inicio');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.auth');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.response');

Route::get('auth/microsoft', [MicrosoftController::class, 'redirectToMicrosoft'])->name('microsoft.auth');
Route::get('auth/microsoft/callback', [MicrosoftController::class, 'handleMicrosoftCallback'])->name('microsoft.response');


require __DIR__.'/auth.php';
