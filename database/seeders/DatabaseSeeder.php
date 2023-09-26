<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Estudiante;
use App\Models\Docente;
use App\Models\Etapa;
use App\Models\Empresa;
use App\Models\Requisito;
use App\Models\Practica;
use App\Models\PracticaRequisito;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(10)->create();
        Estudiante::factory(50)->create();
        Docente::factory(50)->create();
        Etapa::factory(5)->create();
        Empresa::factory(50)->create();
        Requisito::factory(5)->create();
        Practica::factory(20)->create();
        PracticaRequisito::factory(10)->create();
    }
}
