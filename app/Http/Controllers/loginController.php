<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Validator;
use \LARAVEL;

class loginController extends Controller
{
   
    public function create()
    {
        return view('login');
    }
}