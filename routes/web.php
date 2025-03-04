<?php

use App\Http\Controllers\CardsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cards', [CardsController::class, 'index'])->name('cards.index');
Route::get('/cards/create', [CardsController::class, 'create'])->name('cards.create');
Route::post('/cards', [CardsController::class, 'store'])->name('cards.store');
Route::get('/cards/{id}', [CardsController::class, 'show'])->name('cards.show');
Route::get('/cards/{id}/edit', [CardsController::class, 'edit'])->name('cards.edit');
Route::patch('/cards/{id}/update', [CardsController::class, 'update'])->name('cards.update');

Route::delete('/cards/{id}/destroy', [CardsController::class, 'destroy'])->name('cards.destroy');
