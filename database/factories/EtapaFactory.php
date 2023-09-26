<?php

namespace Database\Factories;

use App\Models\Etapa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etapa>
 */
class EtapaFactory extends Factory
{
    protected $model = Etapa::class;
    public function definition(): array
    {
        return [
            //
            'nombre' => $this->faker->unique()->word(),
            'descripcion' => $this->faker->sentence($nbWords = 6)
        ];
    }
}
