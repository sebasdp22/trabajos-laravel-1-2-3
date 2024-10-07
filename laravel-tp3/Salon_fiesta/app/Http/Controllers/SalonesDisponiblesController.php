<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalonesDisponiblesController extends Controller
{
    public function index($zona = 'Ituzaingo')
    {

        if (!preg_match("/^[a-zA-Z\s]+$/", $zona)) {
            return redirect()->route('home')->withErrors(['error' => 'La zona solo puede contener letras.']);
        }
        return view('salones_disponibles', ['zona' => $zona]);
    }
}
