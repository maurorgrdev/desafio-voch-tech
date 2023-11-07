<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ColaboradorCargoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'colaborador_id' => $this->faker->numberBetween(1, 100),
            'cargo_id' => $this->faker->numberBetween(1, 10),
            'nota_desempenho' => $this->faker->numberBetween(0, 10)
       ];
    }
}
