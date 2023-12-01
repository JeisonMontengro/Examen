<?php

namespace App\Http\Controllers\Academica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Calificaciones extends Controller
{
    public function index(){
        return view ('calificaciones.listado_calificaciones');
    }
}
