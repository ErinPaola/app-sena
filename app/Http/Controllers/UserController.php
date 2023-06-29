<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = User::orderBy('id', 'ASC')->paginate(5);

        return view('users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $request->validate([
            'id_tipo_identificacion'  => 'required',
            'numero_identificacion'   => 'required',
            'primer_nombre'           => 'required',
            'segundo_nombre'          => 'required',
            'primer_apellido'         => 'required',
            'segunso_apellido'        => 'required',

            'email' => 'required',
            'address' => 'required'
            ]);
            $users = new User;
            $users->id_tipo_identificacion = $request->id_tipo_identificacion;
            $users->numero_identificacion   = $request->numero_identifica;
            $users->primer_nombre           = $request->primer_nombre;
            $users->segundo_nombre          = $request->segundo_nombre;
            $users->primer_apellido         = $request->primer_apellido;
            $users->segunso_apellido        = $request->segunso_apellido;

            $users->email = $request->email;
            $users->address = $request->address;
            $users->save();
            return redirect()->route('users.index')->with('success','users has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('users.show',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('users.edit',compact('id'));
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
            'id_tipo_identificacion'  => 'required',
            'numero_identificacion'   => 'required',
            'primer_nombre'           => 'required',
            'segundo_nombre'          => 'required',
            'primer_apellido'         => 'required',
            'segunso_apellido'        => 'required',
            ]);
            $users = User::find($id);
            $users->id_tipo_identificacion = $request->id_tipo_identificacion;
            $users->numero_identificacion   = $request->numero_identifica;
            $users->primer_nombre           = $request->primer_nombre;
            $users->segundo_nombre          = $request->segundo_nombre;
            $users->primer_apellido         = $request->primer_apellido;
            $users->segunso_apellido        = $request->segunso_apellido;
            $users->email = $request->email;
            $users->address = $request->address;
            $users->save();
            return redirect()->route('users.index')->with('success','users Has Been updated successfully');
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($users)
    {
        $users->delete();
return redirect()->route('users.index')->with('success','Company has been deleted successfully');

    }
}
