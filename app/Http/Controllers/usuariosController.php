<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class usuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('usuarios',compact('data'));
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
    public function store(Request $data)
    {
        $data->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'role_id' => 'required',
            'password' => 'required|min:6'
        
            ]);
       User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role_id' =>$data['role_id'],
            'password' => bcrypt($data['password']),
        ]);

        return back()->with("estatus","Se ha registrado con exito", );
        
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
    public function edit($id)
    {
       $data =  User::findOrFail($id);
       return view('editarUsuario',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'role_id' => 'required',
            'password' => 'required|min:6'
        
            ]);


        User::findOrFail($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'password' => bcrypt($request->password)
        ]);
        return back()->with("estatus","Se ha editado");
      
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
