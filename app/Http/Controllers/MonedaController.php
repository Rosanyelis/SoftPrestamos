<?php

namespace App\Http\Controllers;

use App\Models\Moneda;
use Illuminate\Http\Request;
use Rmunate\EasyDatatable\EasyDataTable;

class MonedaController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Moneda::all();
        return view('monedas.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('monedas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'moneda' => ['required', 'unique:monedas'],
        ],
        [
            'moneda.required' => 'El campo Moneda es obligatorio',
            'moneda.unique' => 'La Moneda ya existe',
        ]);

        $registro = new Moneda();
        $registro->moneda = $request->moneda;
        $registro->save();

        return redirect()->route('moneda.index')->with('success', 'Registro Guardado Exitósamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Moneda $moneda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Moneda $moneda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Moneda $moneda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Moneda $moneda)
    {
        //
    }
}
