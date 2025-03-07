<?php

use App\Http\Controllers\CardsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});

// Ruta para cambiar el idioma
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['es', 'en', 'bg', 'de'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('lang.switch');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/cards', [CardsController::class, 'index'])->name('cards.index');
    Route::get('/cards/create', [CardsController::class, 'create'])->name('cards.create');
    Route::post('/cards', [CardsController::class, 'store'])->name('cards.store');
    Route::get('/cards/{card}', [CardsController::class, 'show'])->name('cards.show');
    Route::get('/cards/{card}/edit', [CardsController::class, 'edit'])->name('cards.edit');
    Route::patch('/cards/{card}/update', [CardsController::class, 'update'])->name('cards.update');

    Route::delete('/cards/{card}/destroy', [CardsController::class, 'destroy'])->name('cards.destroy');
});

require __DIR__.'/auth.php';
