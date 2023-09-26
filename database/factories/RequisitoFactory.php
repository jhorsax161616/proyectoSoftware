<?php

namespace Database\Factories;

use App\Models\Requisito;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Requisito>
 */
class RequisitoFactory extends Factory
{
    protected $model = Requisito::class;
    public function definition(): array
    {
        return [
            //
            'nombre' => $this->faker->unique()->name(),
            'descripcion' => $this->faker->sentence(),
            'estado' => $this->faker->numberBetween(0, 5)
        ];
    }
}
