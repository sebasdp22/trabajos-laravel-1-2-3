<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index($numero)
    {

        if (!preg_match("/^\d+$/", $numero)) {
            return redirect()->route('home')->withErrors(['error' => 'El contacto debe ser un número.']);
        }
        return view('contacto', ['numero' => $numero]);
    }
}
