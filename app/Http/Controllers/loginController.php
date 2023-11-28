<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\clientes;
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
        return view('inicio', compact('cliente'));
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
                
                return redirect('/cliente/'.($idCli).'')->with(compact('cliente'));
            }else{
                session()->flash('alert', 'Contraseña incorrecta. Vuelve a intentarlo');
                return redirect('/login');
            }
        }
        
    }
}