<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Unidade::factory(100)->create();
        \App\Models\Cargo::factory(10)->create();
        \App\Models\Colaborador::factory(100)->create();
        \App\Models\ColaboradorCargo::factory(100)->create();
    }
}
