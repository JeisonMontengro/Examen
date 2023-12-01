<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Iluminate\Support\srt;


class FacultadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'referencia' => '10',
                'nombre' => 'Buso Reebok',
                'descripcion' => 'Buso Reebok Original Color Negro',
                'color' => 'Negro',
                'precioUnitario' => 100.000,
                'observacion' => 'Buen Estado',
                'Foto' => 'busoReebok',
                'marca' => '1'
                

            ]

        ];
        DB::table('facultades')->insert($datos); 
    }
}
