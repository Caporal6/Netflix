<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActeursSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('acteurs')->insert([
            [
              'id' => 1,
              'nom' => 'Tarantino',
              'date_naissance' => '13 mai 2004',
              'lieux' => 'Longeuille',
              'photo' => ':)',
            ],
            [
                'id' => 2,
                'nom' => 'Ben Affleck',
                'date_naissance' => '15 mai 1923',
                'lieux' => 'Mtl nord',
                'photo' => ':(',
            ],

            [
                'id' => 3,
                'nom' =>  "Maya l'abeille",
                'date_naissance' => '06 mai 1999',
                'lieux' => 'Floride',
                'photo' => 'bzzzzzz',
              ],
              [
                  'id' => 4,
                  'nom' => 'Caillou',
                  'date_naissance' => '15 mai 2012',
                  'lieux' => 'rive sud mtl',
                  'photo' => 'XD',
              ],

              [
                'id' => 5,
                'nom' =>  "The Rock",
                'date_naissance' => '06 juin 1999',
                'lieux' => 'Trois-rivières',
                'photo' => 'ROCH',
              ],

          ]);
    }
}
