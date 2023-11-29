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

        return view('inicio', compact('cliente','lista', 'utilidades','datosQ1Q2'));
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
                return redirect('/cliente/' . $idCli)->with(compact('cliente', 'lista','utilidades','datosQ1Q2'));
            }else{
                session()->flash('alert', 'Contraseña incorrecta. Vuelve a intentarlo');
                return redirect('/login');
            }
        }
        
    }
}