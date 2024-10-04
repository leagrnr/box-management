<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BoxController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/locataire', function () {
    return view('locataire');
})->middleware(['auth', 'verified'])->name('locataire');

Route::get('/contrat', function () {
    return view('contrat');
})->middleware(['auth', 'verified'])->name('contrat');

Route::get('/paiement', function () {
    return view('paiement');
})->middleware(['auth', 'verified'])->name('paiement');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/boxes', [BoxController::class, 'store'])->name('boxes.store');
Route::get('/dashboard', [BoxController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::delete('/boxes/{box}', [BoxController::class, 'destroy'])->name('boxes.destroy');
Route::patch('/boxes/{box}', [BoxController::class, 'update'])->name('boxes.update');

require __DIR__.'/auth.php';
