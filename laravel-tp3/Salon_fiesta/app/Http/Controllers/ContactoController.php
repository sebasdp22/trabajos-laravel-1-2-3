<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Contacto;

class ContactoController extends Controller
{
    
    public function index($numero)
{
    return view('contacto', ['numero' => $numero]);
}

public function showAll()
{
    $contactos = Contacto::all();
    return view('contactos.index', compact('contactos'));
}


    
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'mail' => 'required|email',
            'mensaje' => 'required|string|max:1000',
            'numero' => 'required|integer',
        ]);

        
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Contacto::create([
            'nombre' => $request->nombre,
            'mail' => $request->mail,
            'mensaje' => $request->mensaje,
        ]);
        return redirect()->route('contacto', ['numero' => $request->numero])
            ->with('success', 'Mensaje enviado con éxito.');
    }
}
