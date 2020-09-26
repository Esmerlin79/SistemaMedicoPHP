<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Cita;
class pacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $request ->validate([
            "fecha" => 'required|date|after:today',
        ]);

        $cita = Cita::findorfail($id);
        $cita ->Duracion = $request -> duracion;
        $cita ->Fecha = $request -> fecha;
        $cita ->Hora = $request -> hora;
        $cita ->Paciente_asignado = $request -> paciente;
        $cita ->Doctor_Asigando = $request -> doctor;

        $cita -> update();

        return redirect("/cites");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ced)
    {
        $request ->validate([
            "fecha" => 'required|date',
            "apellido" => "required",
            "nombre" => "required",
            "cedula" => "required"
        ]);


        $paciente = Paciente::findOrFail($ced);
        $paciente ->nombre = $request -> nombre;
        $paciente ->Apellido = $request -> apellido;
        $paciente ->Cedula = $request -> cedula;
        $paciente ->fecha_nacimiento = $request -> fecha;
        $paciente ->TIpo_Sangre = $request -> tiposangre;

        $paciente -> update();
        return redirect("createPatient");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
