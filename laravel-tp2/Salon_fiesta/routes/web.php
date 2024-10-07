<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalonesDisponiblesController;
use App\Http\Controllers\ContactoController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/salones_disponibles/{zona?}', [SalonesDisponiblesController::class, 'index'])->name('salones_disponibles');

Route::get('/contacto/{numero}', [ContactoController::class, 'index'])->where('numero', '[0-9]+')->name('contacto');
