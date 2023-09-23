<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
     /**
     * calculadora de prestamos
     */
    public function calculadora(Request $request)
    {
        $tipo_prestamo = $request->tipo_prestamo;
        $monto = $request->monto;
        $tasa = $request->tasa;
        $frecuencia = $request->frecuencia;
        $cuotas = $request->cuotas;
        $fecha_inicio = $request->fecha_inicio;

        $datosSolicitud = [
            'tipo' => $tipo_prestamo,
            'prestamo' => $monto,
            'cuota' => $cuotas,
            'tasa' => $tasa,
            'frecuencia' => $frecuencia,
            'fecha_inicio' => $fecha_inicio
        ];
        # calculamos las fechas segun la seleccion


        # los datos que reflejaremos en la tabla
        $calculos = array();
        # Calculamos la tasa inicial del monto de prestamo
        $mtasa = ($monto * $tasa) / 100;
        # Calculamos el monto bruto a pagar segun la cantidad de cuotas
        $mcuota = $monto / $cuotas;
        # Calculamos el monto a cancelar en la primera cuota
        $mintcuota = $mcuota + $mtasa;
        # realizamos un array push con la data a mostrar del calculo
        $data = [
            'mprestamo' => $monto,
            'mcuota' => $mcuota,
            'mtasa' => $mtasa,
            'mintcuota' => $mintcuota,
        ];
        array_push($calculos, $data);
        # Procesamos un for para completar el calculo
        $cant = $cuotas - 1;
        if ($tipo_prestamo == 'Insoluto') {
            for ($i=1; $i <= $cant; $i++) {
                #calculo la tasa
                $monto = $monto - $mcuota;
                $pinteres = ($monto * $tasa) / 100;
                $mintcuota = $mcuota + $pinteres;

                $data = [
                    'mprestamo' => $monto,
                    'mcuota' => $mcuota,
                    'mtasa' => $pinteres,
                    'mintcuota' => $mintcuota,
                ];
                array_push($calculos, $data);
            }
        }
        return view('prestamos.caluladora', compact('datosSolicitud', 'calculos'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Prestamo $prestamo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestamo $prestamo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prestamo $prestamo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prestamo $prestamo)
    {
        //
    }
}
