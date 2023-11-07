<?php

namespace Database\Factories;

use App\Models\Unidade;
use Illuminate\Database\Eloquent\Factories\Factory;

class UnidadeFactory extends Factory
{
    protected $unidade = Unidade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker_br = \Faker\Factory::create('pt_BR');

        return [
            'razao_social' => $faker_br->name,
            'nome_fantasia' => $faker_br->name,
            'cnpj' => $faker_br->cnpj(),
       ];
    }
}
