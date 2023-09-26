<?php

namespace Database\Seeders;

use App\Models\Estudiante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creando un registro de prueba de Estudiante
        $estudiante = new Estudiante();

        $estudiante->codigo = 'est_001';
        $estudiante->nombre = 'Jhordan Sax';
        $estudiante->apellidop = 'Cordova';
        $estudiante->apellidom = 'Poma';
        $estudiante->telefono = '+51917789111';
        $estudiante->correo = '9999999@continental.edu.pe';

        $estudiante->save();
    }
}
