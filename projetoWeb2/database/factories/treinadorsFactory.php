<?php

namespace Database\Factories;

use App\Models\treinador;
use Illuminate\Database\Eloquent\Factories\Factory;

class treinadorsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = treinador::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'treinador_id' => $this->faker->radomDigit
            'nome' => $this->faker->word,
            'email' => $this->faker->word,
            'telefone' => $this->faker->radomDigit,
        ];
    }
}

