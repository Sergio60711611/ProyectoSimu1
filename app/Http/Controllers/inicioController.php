<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Models\Inicio;
use Illuminate\Support\Facades\Validator;
use \LARAVEL;

class inicioController extends Controller
{
   
    public function create()
    {
        return view('inicio');
    }
}