<?php

namespace App\Http\Controllers\Academica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Profesores extends Controller
{
    public function index(){
        return view ('profesores.listado_profesores');
    }
}
