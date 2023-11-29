<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use App\Models\simulaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\BD;

class ClientesController extends Controller
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
        $validation= $request->validate([

            'nombre' => 'required | min:3 | max: 30',
            'correo' => 'required |email',
            'contraseña' => 'required |numeric| digits_between:6,10',
        ]);

        $cliente=new Clientes();
        $cliente->nombre = $request->nombre;
        $cliente->correo = $request->correo;
        $cliente->contraseña = $request->contraseña;
        
        $cliente->save();

        $lista = clientes::all();
        $ultCli  = $lista->max('id');

        $simulacion=new Simulaciones();
        $simulacion->c10 = 1.5;
        $simulacion->v10 = 2;
        $simulacion->d10 = 0.9;
        $simulacion->c20 = 1.2;
        $simulacion->v20 = 2;
        $simulacion->d20 = 0.6;

        $simulacion->Q1 = 90;
        $simulacion->Q2 = 121;
        $simulacion->utilidad_meses = '{"1":117.69999999999999,"2":114.39999999999998,"3":118.80000000000001,"4":124.30000000000001,"5":121,"6":126.5,"7":123.19999999999999,"8":112.19999999999999,"9":114.39999999999998,"10":102.30000000000001,"11":115.5,"12":113.30000000000001}';
        $simulacion->utilidad_iteraciones = '{"1":119.625,"2":116.50000000000001,"3":120.08333333333331,"4":116.96666666666665}';
        $simulacion->utilidad = 118.29375;
        $simulacion->id_clientes = $ultCli;
        
        $simulacion->save();
        
        return redirect('/login')->with('alert', 'Cliente registrado correctamente');
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
