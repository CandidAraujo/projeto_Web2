<?php

namespace Database\Seeders;

use app\models\atleta;
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
        atletas::create([
        'atleta_id'=>1,
        //'treinador_id'=>,
        'nome'=>'Claire',
        'email'=>'claireout67@gmail.com',
        'telefone'=>'81998745502',
        'modalidade'=>'Natação',
 ]);
    }
}