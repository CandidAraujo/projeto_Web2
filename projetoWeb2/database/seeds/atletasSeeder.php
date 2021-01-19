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
        $users = User::all();
        foreach ($users as $user) {
        atleta::factory(5)->create([
        'atleta_id' =>$user->id
        ]);
 ]);
    }
}