<?php

namespace Database\Factories;

use App\Models\atleta;
use Illuminate\Database\Eloquent\Factories\Factory;

class atletasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = atleta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'atleta_id' => $this->faker->radomDigit
            'treinador_id' => $this->faker->radomDigit
            'nome' => $this->faker->word,
            'email' => $this->faker->word,
            'telefone' => $this->faker->radomDigit,
            'modalidade' => $this->faker->word,
        ];
    }
}

