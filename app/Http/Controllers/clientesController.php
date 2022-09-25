<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;


class clientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($request)
    {
        $texto=trim ($request ->get('texto'));
        $cliente=clientes::table('clientes')
        ->select('id','Pnombre','Snombre','Papellido', 'Sapellido', 'Direccion', 'Telefono')
        ->where('Pnombre','LIKE','%'.$texto.'%')
        ->orwhere('Sapellido','LIKE','%'.$texto.'%')
        ->orderBy('Papellido','asc')
        ->paginate(10);
        return view('clientes.index', compact('clientes'));
        dd ($texto );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos=$request->validate(
            [
                'Pnombre'            =>'required|max:60',
                'Snombre'            =>'nullable|max:60',
                'Papellido'            =>'required|max:60',
                'Spellido'            =>'nullable|max:60',
                'Direccion'            =>'required|max:60',
                'Telefono'            =>'required|max:60'
            ]);
            $clientes=clientes::create($datos);
            return redirect()->route('clientes.index');
            dd ($datos );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit(clientes $clientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clientes $clientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(clientes $clientes)
    {
        //
    }
}
