<?php

namespace Database\Factories;

use App\Models\Articulo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticuloFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Articulo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo' => $this->faker->randomNumber($nbDigits = 5),
            'desc' => $this->faker->sentence,
            'cantidad' => $this->faker->randomNumber($nbDigits = 2),
            'precio' => $this->faker->randomNumber($nbDigits = 3),
        ];
    }
}
