<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\clientes;
use App\Models\simulaciones;
use Illuminate\Support\Facades\Validator;
use \LARAVEL;

class loginController extends Controller
{
   
    public function create()
    {
        return view('login');
    }
    public function createCliente($id)
    {   
        $cliente = Clientes::find($id);  
        $lista = Simulaciones::where('id_clientes', $id)->get(); 

        $utilidades = Simulaciones::where('id_clientes', $id)->pluck('utilidad')->toArray();

        $datosQ1Q2 = Simulaciones::where('id_clientes', $id)
            ->select('Q1', 'Q2')
            ->get()
            ->map(function ($item) {
                return "Q1=\"{$item->Q1}\" y Q2=\"{$item->Q2}\"";
            })
            ->toArray();

        $numUltSimulacion  = $lista->max('id');
        $ultSimulacionMeses = Simulaciones::find($numUltSimulacion); 
        $ultSimulacionMeses['utilidad_meses'] = json_decode($ultSimulacionMeses['utilidad_meses'], true);

        $ultSimulacionIt = Simulaciones::find($numUltSimulacion); 
        $ultSimulacionIt['utilidad_iteraciones'] = json_decode($ultSimulacionIt['utilidad_iteraciones'], true);

        $ultSimulacion = Simulaciones::find($numUltSimulacion); 

        return view('inicio', compact('cliente','lista', 'utilidades','datosQ1Q2','ultSimulacionMeses','ultSimulacionIt','ultSimulacion'));
    }
    public function inicioSesion(Request $request)
    {
        $validation= $request->validate([
            'correo' => 'required',
            'contraseña' => 'required',
        ]);
    
        $correo = $request->correo;
        $clientesCorreo = Clientes::where('correo', $correo)->get();
        
        if(count($clientesCorreo) === 0){
            session()->flash('alert', 'No existe un cliente con el ci : ('.$correo.')');
            return redirect('/login');

        }else{
            $passwordcliente = $clientesCorreo->pluck('contraseña');
            $passSesions = $request->contraseña;

            $difference = $passwordcliente->diff($passSesions);

            if($difference->isEmpty()){

                $idCli = $clientesCorreo->pluck('id');
                $idCli = $idCli->first();

                $cliente = Clientes::find($idCli);

                $lista = Simulaciones::where('id_clientes', $idCli)->get();

                $utilidades = Simulaciones::where('id_clientes', $idCli)->pluck('utilidad')->toArray();
                $datosQ1Q2 = Simulaciones::where('id_clientes', $idCli)
                    ->select('Q1', 'Q2')
                    ->get()
                    ->map(function ($item) {
                        return "Q1=\"{$item->Q1}\" y Q2=\"{$item->Q2}\"";
                    })
                    ->toArray();
                
                $numUltSimulacion  = $lista->max('id');
                $ultSimulacionMeses = Simulaciones::find($numUltSimulacion); 
                $ultSimulacionMeses['utilidad_meses'] = json_decode($ultSimulacionMeses['utilidad_meses'], true);

                $ultSimulacionIt = Simulaciones::find($numUltSimulacion); 
                $ultSimulacionIt['utilidad_iteraciones'] = json_decode($ultSimulacionIt['utilidad_iteraciones'], true);
                
                $ultSimulacion = Simulaciones::find($numUltSimulacion); 

                return redirect('/cliente/' . $idCli)->with(compact('cliente', 'lista','utilidades','datosQ1Q2','ultSimulacionMeses','ultSimulacionIt','ultSimulacion'));
            }else{
                session()->flash('alert', 'Contraseña incorrecta. Vuelve a intentarlo');
                return redirect('/login');
            }
        }
        
    }
}