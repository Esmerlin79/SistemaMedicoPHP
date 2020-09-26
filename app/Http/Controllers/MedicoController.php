<?php

namespace App\Http\Controllers;

use App\Medico;
use Illuminate\Http\Request;
use App\Visita;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\DB as FacadesDB;
use SebastianBergmann\Environment\Console;
use DB;
use App\Models\Citaspendiente;
use App\Models\Paciente;
class MedicoController extends Controller
{

   
     
    public function createVisita()
    {
        $Visita = Visita::all();
        $doctor = DB::table('users')->where('id',3)->get();
        $paciente = Paciente::all();
        return view("createvisit", 
        ["visitas" => $Visita,"doctor" => $doctor, "pacientes" => $paciente]);
       
    }
    public function createv (Request $request) {
        $Visita = new Visita();
        $Visita ->Fecha = $request -> Fecha;
        $Visita ->Motivo = $request -> Motivo;
        $Visita ->Comentario = $request -> Comentario;
        $Visita ->Proxima_visita = $request -> Proxima_visita;
        $Visita ->Receta = $request -> Receta;
        $Visita ->doctor_id = $request -> doctor_id;
        $Visita ->paciente_id = $request -> paciente_id;

    
        $Visita -> save();
        return redirect("/createVisita");
    }

   
    public function editv($ID)
    {
        $Visita = Visita::findorfail($ID);
        $doctor = DB::table('users')->where('id',3)->get();
        $paciente = Paciente::all();
        return view("editv", [
            "visitas" => $Visita,
            "ID" => $ID,
            "doctor" => $doctor,
            "pacientes" => $paciente
        ]);
    }

    function editedv (Request $request, $ID) {
        /*$Visita = Visita::find($request->ID);
        $Visita = new Visita();
        $Visita ->Fecha = $request -> Fecha;
        $Visita ->Motivo = $request -> Motivo;
        $Visita ->Comentario = $request -> Comentario;
        $Visita ->Proxima_visita = $request -> Proxima_visita;
        $Visita ->Receta = $request -> Receta;
        $Visita ->doctor_id = $request -> doctor_id;
        $Visita ->paciente_id = $request -> paciente_id;
        $Visita ->update();
    */
        Visita::findorfail($ID)->update($request->all());
        return redirect("createVisita");
    }



    public function deletev($ID)
    {
        
        $Visita = Visita::findorfail($ID);
        $Visita ->delete();

        return redirect("/createVisita");
    }


    public function calendarcites(Request $request)
    {
        return view("/calendarcites");
    }
    
     
    public function printrecet()
    {
        $Visita = Visita::all();
        return view("printrecet", 
        ["visitas" => $Visita]);
       

    }

   
   
    public function destroy(Medico $medico)
    {
        //
    }
public function imprimirCita(){
    $citas = Citaspendiente::all();
    $doctores = DB::table('users')->where('id',3)->get();
    $pacientes = DB::table('pacientes')->get();
    return view('imprimirCita',compact('citas','doctores','pacientes'));
}
    
}
