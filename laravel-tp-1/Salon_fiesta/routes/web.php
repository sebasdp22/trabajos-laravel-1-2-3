<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/salones_disponibles/{zona?}', function ($zona = 'Ituzaingo') {
    if (!preg_match("/^[a-zA-Z\s]+$/", $zona)) {
        return redirect()->route('home')->withErrors(['error' => 'La zona solo puede contener letras.']);
    }
    return view('salones_disponibles', ['zona' => $zona]);
})->name('salones_disponibles');

Route::get('/contacto/{numero}', function ($numero) {
    if (!preg_match("/^\d+$/", $numero)) {
        return redirect()->route('home')->withErrors(['error' => 'El contacto debe ser un número.']);
    }
    return view('contacto', ['numero' => $numero]);
})->where('numero', '[0-9]+')->name('contacto');
?>