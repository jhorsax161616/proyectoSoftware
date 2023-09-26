<?php

namespace Database\Factories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
{
    protected $model = Empresa::class;
    public function definition(): array
    {
        return [
            //
            'nombre' => $this->faker->unique()->company(),
            'encargado' => $this->faker->name(),
            'rubro' => $this->faker->jobTitle(),
            'direccion' => $this->faker->streetAddress(),
            'telefono' => $this->faker->phoneNumber()
        ];
    }
}
