<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usagers')->insert([
            [
                'id'=>1,
                'nom'=> 'landry',
                'prenom' => 'ivan',
                'nomUsager' => 'tatsumi',
                'email' =>'tatsumi@gmail.com',
                'role'=>'admin',
                'password' =>Hash::make('landry123')
            ],
            [
                'id'=>2,
                'nom'=> 'jordan',
                'prenom' => 'nike',
                'nomUsager' => 'hoga',
                'email' =>'hoga@gmail.com',
                'role'=>'normal',
                'password' =>Hash::make('jordan123')
            ],
            [
                'id'=>3,
                'nom'=> 'julian',
                'prenom' => 'ross',
                'nomUsager' => 'maile',
                'email' =>'maile@gmail.com',
                'role'=>'admin',
                'password' =>Hash::make('julian123')
            ]
        ]);
    }
}
