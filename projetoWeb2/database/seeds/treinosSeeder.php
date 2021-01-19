<?php

namespace Database\Seeders;

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
        //
        User::all()
        treinos::create([
        'id'=>1,
        'tipo'=>'salto acrobático',
        //'treinador_id'=>,
        //'atleta_id'=>,
 ]);
    }
}