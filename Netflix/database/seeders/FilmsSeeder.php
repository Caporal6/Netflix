<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(){
        DB::table('films')->insert([
          [
            'id' => 1,
            'titre' => 'Pan',
            'categorie'=> 'Action',
            'resume' => 'yessir mon homme',
            'duree' => 25,
            'realisateur' => 1,
            'producteur' => 1,
            'annee' => 2004,
            'rating' => 5
          ],

          [
            'id' => 2,
            'titre' => 'Malik',
            'categorie'=> 'Action',
            'resume' => 'Money',
            'duree' => 65,
            'realisateur' => 1,
            'producteur' => 1,
            'annee' => 2002,
            'rating' => 10
          ],

          [
            'id' => 3,
            'titre' => 'FX',
            'categorie'=> 'Aventure',
            'resume' => 'Un peux Orto',
            'duree' => 95,
            'realisateur' => 1,
            'producteur' => 1,
            'annee' => 2006,
            'rating' => 7
          ],

          [
            'id' => 4,
            'titre' => 'Dai',
            'categorie'=> 'Aventure',
            'resume' => 'Casse couille',
            'duree' => 56,
            'realisateur' => 1,
            'producteur' => 1,
            'annee' => 2008,
            'rating' => 10
          ],

          [
            'id' => 5,
            'titre' => 'Alex',
            'categorie'=> 'Horreur',
            'resume' => 'El Daron',
            'duree' => 25,
            'realisateur' => 1,
            'producteur' => 1,
            'annee' => 2020,
            'rating' => 2
          ],

          [
            'id' => 6,
            'titre' => 'Maya',
            'categorie'=> 'Horreur',
            'resume' => 'Best gf',
            'duree' => 11,
            'realisateur' => 1,
            'producteur' => 1,
            'annee' => 2021,
            'rating' => 3
          ],

          [
            'id' => 7,
            'titre' => 'Walid',
            'categorie'=> 'Comedie',
            'resume' => ';)',
            'duree' => 68,
            'realisateur' => 1,
            'producteur' => 1,
            'annee' => 1999,
            'rating' => 11
          ],

          [
            'id' => 8,
            'titre' => 'Ben',
            'categorie'=> 'Comedie',
            'resume' => 'Best Man',
            'duree' => 95,
            'realisateur' => 1,
            'producteur' => 1,
            'annee' => 2004,
            'rating' => 13
          ],

          [
            'id' => 9,
            'titre' => 'xavierPoche',
            'categorie'=> 'Amour',
            'resume' => 'Yer poche',
            'duree' => 45,
            'realisateur' => 1,
            'producteur' => 1,
            'annee' => 2004,
            'rating' => 1
          ],


          [
            'id' => 10,
            'titre' => 'xavierCool',
            'categorie'=> 'Amour',
            'resume' => 'Yer cool',
            'duree' => 25,
            'realisateur' => 1,
            'producteur' => 1,
            'annee' => 2006,
            'rating' => 8
          ],
          

        ]);
        }
        
}
