<?php

namespace App\Http\Controllers\Academica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Iluminate\Support\srt;


class Programas extends Controller
{
    public function index(){
        $programas = DB::table('programas')
                            ->join('facultades','facultad','=','codFacultad' )->get();
                            //select * from programas join facultades on facultad=codFacultad;
        return view('programas.listado_programas', ['program'=>$programas]);
       }
}
