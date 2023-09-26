<?php

namespace Database\Factories;

use App\Models\Practica;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Practica>
 */
class PracticaFactory extends Factory
{
    protected $model = Practica::class;
    public function definition(): array
    {
        return [
            //
            'codigo' => $this->faker->unique()->randomNumber(3),
            'id_estudiante' => $this->faker->numberBetween(1, 50),
            'id_docente' => $this->faker->numberBetween(1, 50),
            'id_empresa' => $this->faker->numberBetween(1, 50),
            'titulo' => $this->faker->sentence(),
            'id_etapa' => $this->faker->numberBetween(1, 5)
        ];
    }
}
