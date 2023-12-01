<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Iluminate\Support\srt;


class ProgramasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'codPrograma' => '1',
                'nomPrograma' => 'Ingenieria de Sistemas',
                'Facultad' => '1'
            ],
            [
                'codPrograma' => '2',
                'nomPrograma' => 'Derecho',
                'Facultad' => '2'
            ], 
            [
                'codPrograma' => '3',
                'nomPrograma' => 'Licenciatura en Matematicas',
                'Facultad' => '3'
            ],
            [
                'codPrograma' => '4',
                'nomPrograma' => 'Programa de Biologia',
                'Facultad' => '4'
            ],
            [
                'codPrograma' => '5',
                'nomPrograma' => 'Sociologia',
                'Facultad' => '5'
            ]
        ];
        DB::table('programas')->insert($datos);
    }
}
