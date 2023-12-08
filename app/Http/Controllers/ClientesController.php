<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use App\Models\simulaciones;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\SimulacionesExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\BD;

class ClientesController extends Controller
{
    public function excel($id){
        $cliente = Clientes::find($id);

        if (!$cliente) {
            abort(404, 'Cliente no encontrado');
        }

        // Filtra las simulaciones por el id del cliente
        $simulaciones = simulaciones::where('id_clientes', $cliente->id)->get();

        return Excel::download(new SimulacionesExport($simulaciones,$cliente), 'ExcelSimu.xlsx');
    }
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
    public function createAyuda($id)
    {
        $cliente = Clientes::find($id);
        return view('ayuda', compact('cliente'));
    }
    public function createPdf($id)
    {

        $cliente = Clientes::find($id);
        $lista = Simulaciones::where('id_clientes', $id )->get();

        $pdf = Pdf::loadView('pdfHistoria', compact('cliente','lista'));
        $pdf->setPaper('letter', 'landscape');
        
        return $pdf->stream();
    }
    public function createSimuDetalle(Request $request, $id, $idSim)
    {
        $counterm = $request->input('counterm');
        $cliente = Clientes::find($id);
        $simulacion = simulaciones::find($idSim);

        $simulacionIt = Simulaciones::find($idSim);
        $simulacionIt['utilidad_iteraciones'] = json_decode($simulacionIt['utilidad_iteraciones'], true);

        $simulacionMeses = Simulaciones::find($idSim); 
        $simulacionMeses['utilidad_meses'] = json_decode($simulacionMeses['utilidad_meses'], true);


        return view('detalleSimu', compact('cliente','simulacion','simulacionIt','simulacionMeses','counterm'));
    }
    public function pdf(Request $request,$id, $idSim)
    {
        $counterm = $request->input('counterm');
        $cliente = Clientes::find($id);
        $simulacion = simulaciones::find($idSim);

        $simulacionIt = Simulaciones::find($idSim);
        $simulacionIt['utilidad_iteraciones'] = json_decode($simulacionIt['utilidad_iteraciones'], true);

        $simulacionMeses = Simulaciones::find($idSim); 
        $simulacionMeses['utilidad_meses'] = json_decode($simulacionMeses['utilidad_meses'], true);

        $pdf = Pdf::loadView('pdf', compact('cliente','simulacion','simulacionIt','simulacionMeses','counterm'));
        return $pdf->stream();
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
        $simulacion->tipo = 1;
        $simulacion->c10 = 1.5;
        $simulacion->v10 = 2;
        $simulacion->d10 = 0.9;
        $simulacion->c20 = 1.2;
        $simulacion->v20 = 2;
        $simulacion->d20 = 0.6;

        $simulacion->Q1 = 90;
        $simulacion->Q2 = 121;
        $simulacion->utilidad_meses = '{"1":117.69,"2":114.39,"3":118.81,"4":124.31,"5":121,"6":126.54,"7":123.19,"8":112.19,"9":114.39,"10":102.31,"11":115.5,"12":113.31}';
        $simulacion->utilidad_iteraciones = '{"1":119.62,"2":116.51,"3":120.08,"4":116.95}';
        $simulacion->utilidad = 118.24;
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
