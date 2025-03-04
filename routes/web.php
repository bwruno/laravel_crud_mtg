<?php

use App\Http\Controllers\CardsController;
use Illuminate\Support\Facades\Route;




use App\Http\Controllers\LoginController;

Route::get('login', function () {
    return view('login'); // Asegúrate de que el nombre de tu vista sea correcto
})->name('login.view');

Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('cards', function () {
    return view('cards'); // La página a la que rediriges cuando el login es exitoso
})->name('cards.index');




Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/cards', [CardsController::class, 'index'])->name('cards.index');
Route::get('/cards/create', [CardsController::class, 'create'])->name('cards.create');
Route::post('/cards', [CardsController::class, 'store'])->name('cards.store');
Route::get('/cards/{card}', [CardsController::class, 'show'])->name('cards.show');
Route::get('/cards/{card}/edit', [CardsController::class, 'edit'])->name('cards.edit');
Route::patch('/cards/{card}/update', [CardsController::class, 'update'])->name('cards.update');

Route::delete('/cards/{card}/destroy', [CardsController::class, 'destroy'])->name('cards.destroy');
