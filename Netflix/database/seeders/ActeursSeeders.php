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
              'photo' => 'Tarantino-6564d4bc151f0.jpg',
              'categorie' => 'Réalisateur'
            ],
            [
                'id' => 2,
                'nom' => 'Ben Affleck',
                'date_naissance' => '15 mai 1923',
                'lieux' => 'Mtl nord',
                'photo' => 'Ben-6564d58654af1.jpg',
                'categorie' => 'Acteur'
            ],

            [
                'id' => 3,
                'nom' =>  "Maya l'abeile",
                'date_naissance' => '06 mai 1999',
                'lieux' => 'Floride',
                'photo' => 'maya-6564d628325fe.jpg',
                'categorie' => 'Producteur'
              ],
              [
                  'id' => 4,
                  'nom' => 'Caillou',
                  'date_naissance' => '15 mai 2012',
                  'lieux' => 'rive sud mtl',
                  'photo' => 'ca-6564d64db86fd.jpg',
                  'categorie' => 'Acteur'
              ],

              [
                'id' => 5,
                'nom' =>  "The Rock",
                'date_naissance' => '06 juin 1999',
                'lieux' => 'Trois-rivières',
                'photo' => 'Rock-6568fd2db67fe.jpg',
                'categorie' => 'Réalisateur'
              ],

              [
                'id' => 6,
                'nom' =>  "Brendan Fraser",
                'date_naissance' => '16 juin 2010',
                'lieux' => 'Floride',
                'photo' => 'Brendan-6568fd4354a9c.jpg',
                'categorie' => 'Réalisateur'
              ],

              [
                'id' => 7,
                'nom' =>  "Austin Butler",
                'date_naissance' => '16 mars 2010',
                'lieux' => 'Texas',
                'photo' => 'Austin-6568fd4eda7a0.jpg',
                'categorie' => 'Producteur'
              ],

              [
                'id' => 8,
                'nom' =>  "Nicolas Cage",
                'date_naissance' => '09 mai 1888',
                'lieux' => 'Texas',
                'photo' => 'nicola-6568fd18f4008.jpg',
                'categorie' => 'Acteur'
              ],


              [
                'id' => 9,
                'nom' =>  "Jake Gyllenhaal",
                'date_naissance' => '22 Decembre 2000',
                'lieux' => 'Montreal',
                'photo' => 'jake-6568fd0ae71b0.jpg',
                'categorie' => 'Acteur'
              ],

              [
                'id' => 10,
                'nom' =>  "Brad Pitt",
                'date_naissance' => '13 Decembre 1979',
                'lieux' => 'Russie',
                'photo' => 'Brad-6568fc9af0e16.jpg',
                'categorie' => 'Réalisateur'
              ],






          ]);
    }
}
