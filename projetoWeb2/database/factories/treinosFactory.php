<?php

namespace Database\Factories;

use App\Models\treino;
use Illuminate\Database\Eloquent\Factories\Factory;

class treinosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = treino::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'id' => $this->faker->radomDigit
            'treinador_id' => $this->faker->radomDigit
            'atleta_id' => $this->faker->radomDigit
            'tipo' => $this->faker->word,
        ];
    }
}

