<?php

namespace Database\Seeders;
//Criando as seeds dos models

use app\Models\treino;
use Illuminate\Database\Seeder;

class VendasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        foreach ($users as $user) {
        treino::factory(5)->create([
        'atleta_id' =>$user->id
        'treinador_id' =>$user->id
        ]);
        }
    }
}