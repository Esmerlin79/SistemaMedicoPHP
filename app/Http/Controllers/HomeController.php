<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
USE App\Models\Cita;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data =  DB::table('users')->count();
      $paciente = DB::table('pacientes')->count();
      $cita = DB::table('citas')->sum("controlPrecio");
      $doctor = DB::table('users')->where('role_id',3)->count();
        return view('home',compact('data','paciente','cita','doctor'));
    }

    
}
