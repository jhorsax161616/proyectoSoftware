<?php

namespace Database\Factories;

use App\Models\PracticaRequisito;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PracticaRequisito>
 */
class PracticaRequisitoFactory extends Factory
{
    protected $model = PracticaRequisito::class;
    public function definition(): array
    {
        return [
            //
            'id_practica' => $this->faker->numberBetween(1, 20),
            'id_requisito' => $this->faker->numberBetween(1, 5),
        ];
    }
}
