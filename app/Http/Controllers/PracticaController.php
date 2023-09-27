<?php

namespace App\Http\Controllers;

use App\Models\Practica;
use Illuminate\Http\Request;
use App\Http\Controllers\console;
use Psy\Readline\Hoa\Console as HoaConsole;
use Symfony\Component\Console\Output\ConsoleOutput;

class PracticaController extends Controller
{
    //
    public function index() {
        // Lo mismo que eloquent
        $practicas = Practica::orderBy('id', 'desc')->paginate();

        return view('practicas.index', compact('practicas'));
    }

    public function create() {
        return view('practicas.create');
    }

    public function show(Practica $practica) {
        return view('practicas.show', compact('practica'));
    }

    // Método pra almacenar un nuevo registro con formulario
    public function store(Request $request) {
        $practica = new Practica();

        $practica->codigo = $request->codigo;
        $practica->id_estudiante = $request->id_estudiante;
        $practica->id_docente = $request->id_docente;
        $practica->id_empresa = $request->id_empresa;
        $practica->titulo = $request->titulo;
        $practica->id_etapa = $request->id_etapa;

        $practica->save();

        return redirect()->route('practicas.show', $practica);
    }

    // Método para actualizar los registros
    public function edit(Practica $practica) {
        return view('practicas.edit', compact('practica'));
    }

    // Metodo para actualizar los registros PUT
    public function update(Request $request, Practica $practica) {
        
        $practica->codigo = $request->codigo;
        $practica->id_estudiante = $request->id_estudiante;
        $practica->id_docente = $request->id_docente;
        $practica->id_empresa = $request->id_empresa;
        $practica->titulo = $request->titulo;
        $practica->id_etapa = $request->id_etapa;

        $practica->save();

        return redirect()->route('practicas.show', $practica);
    }
}
