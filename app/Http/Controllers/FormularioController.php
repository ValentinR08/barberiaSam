<?php

namespace App\Http\Controllers;

use App\Models\formulario;
use App\Http\Requests\StoreformularioRequest;
use App\Http\Requests\UpdateformularioRequest;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }
    
    public function nosotros()
    {
        return view('nosotros');
    }
    public function servicios()
    {
        return view('servicios');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreformularioRequest $request)
    {
        
        $formulario = new formulario;
        $formulario->nombre = $request->nombre;
        $formulario->apellido = $request->apellido;
        $formulario->edad = $request->edad;
        $formulario->telefono = $request->telefono;
        $formulario->comentario = $request->comentario;
        $formulario->save();
        return redirect()->route('formulario.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(formulario $formulario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(formulario $formulario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateformularioRequest $request, formulario $formulario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(formulario $formulario)
    {
        //
    }
}
