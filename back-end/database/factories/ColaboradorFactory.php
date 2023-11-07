<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ColaboradorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker_br = \Faker\Factory::create('pt_BR');

        return [
            'nome' => $faker_br->name,
            'cpf' => $faker_br->cpf,
            'email' => $faker_br->email,
            'unidade_id' => $this->faker->numberBetween(1, 100)
       ];
    }
}
