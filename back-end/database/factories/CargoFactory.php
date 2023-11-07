<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CargoFactory extends Factory
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
            'cargo' => $faker_br->word(),
       ];
    }
}
