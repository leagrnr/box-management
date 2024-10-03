<?php

use App\Http\Controllers\ProfileController;
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

require __DIR__.'/auth.php';
