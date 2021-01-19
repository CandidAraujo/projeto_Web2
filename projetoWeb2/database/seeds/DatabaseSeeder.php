<?php

use Illuminate\Database\Seeder;
//Criando as seeds dos models

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \app\Models\User::factory(10)->create();
        $this->all([
        	atletasSeeder::class;
        ])
        $this->all([
        	treinadorsSeeder::class;
        ])
    }
}
