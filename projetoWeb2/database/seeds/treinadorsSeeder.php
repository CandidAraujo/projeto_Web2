<?php

namespace Database\Seeders;

use app\models\treinador;
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
        treinador::factory(5)->create([
        'treinador_id' =>$user->id
        ]);
    }
}