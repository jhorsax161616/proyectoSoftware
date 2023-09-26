<?php

namespace Database\Factories;

use App\Models\Estudiante;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estudiante>
 */
class EstudianteFactory extends Factory
{
    protected $model = Estudiante::class;
    public function definition(): array
    {
        return [
            //
            'codigo' => $this->faker->unique()->word(),
            'nombre' => substr($this->faker->name(), 0, 25),
            'apellidop' => $this->faker->lastName(),
            'apellidom' => $this->faker->lastName(),
            'telefono' => $this->faker->phoneNumber(),
            'correo' => $this->faker->email()
        ];
    }
}
