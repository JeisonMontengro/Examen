<?php

namespace App\Http\Controllers\Academica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Iluminate\Support\srt;
use App\Models\Faculty;



class Facultades extends Controller
{
    public function index(){
        $facultades=DB::table('facultades')->get();
        return view('facultades.listado_facultades', ['faculty'=>$facultades]);
     }

     public function form_registro(){
        return view('facultades.registro_facultades');
     }

     public function registrar(Request $request){
        $facultad = new Faculty();
        $facultad->codFacultad = $request->input('cod_facultad');
        $facultad->nomFacultad = $request->input('nom_facultad');
        $facultad->save();
        return redirect()->route('listado_facultades');

     }
}
