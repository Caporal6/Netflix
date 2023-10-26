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
            'realisateur_id' => 1,
            'producteur_id' => 1,
            'annee' => 2004,
            'rating' => 5,
            'photo' => 'https://www.cinetrafic.fr/images/affiches/original/aff_1587020190610160005.jpg'
          ],

          [
            'id' => 2,
            'titre' => 'Malik',
            'categorie'=> 'Action',
            'resume' => 'Money',
            'duree' => 65,
            'realisateur_id' => 1,
            'producteur_id' => 2,
            'annee' => 2002,
            'rating' => 10,
            'photo' => 'https://www.cinetrafic.fr/images/affiches/original/aff_1587020190610160005.jpg'
          ],

          [
            'id' => 3,
            'titre' => 'FX',
            'categorie'=> 'Aventure',
            'resume' => 'Un peux Orto',
            'duree' => 95,
            'realisateur_id' => 3,
            'producteur_id' => 1,
            'annee' => 2006,
            'rating' => 7,
            'photo' => 'https://www.cinetrafic.fr/images/affiches/original/aff_1587020190610160005.jpg'
          ],

          [
            'id' => 4,
            'titre' => 'Dai',
            'categorie'=> 'Aventure',
            'resume' => 'Casse couille',
            'duree' => 56,
            'realisateur_id' => 1,
            'producteur_id' => 4,
            'annee' => 2008,
            'rating' => 10,
            'photo' => 'https://www.cinetrafic.fr/images/affiches/original/aff_1587020190610160005.jpg'
          ],

          [
            'id' => 5,
            'titre' => 'Alex',
            'categorie'=> 'Horreur',
            'resume' => 'El Daron',
            'duree' => 25,
            'realisateur_id' => 3,
            'producteur_id' => 2,
            'annee' => 2020,
            'rating' => 2,
            'photo' => 'https://www.cinetrafic.fr/images/affiches/original/aff_1587020190610160005.jpg'
          ],

          [
            'id' => 6,
            'titre' => 'Maya',
            'categorie'=> 'Horreur',
            'resume' => 'Best gf',
            'duree' => 11,
           'realisateur_id' => 3,
            'producteur_id' => 1,
            'annee' => 2021,
            'rating' => 3,
            'photo' => 'https://www.cinetrafic.fr/images/affiches/original/aff_1587020190610160005.jpg'
          ],

          [
            'id' => 7,
            'titre' => 'Walid',
            'categorie'=> 'Comedie',
            'resume' => ';)',
            'duree' => 68,
            'realisateur_id' => 5,
            'producteur_id' => 1,
            'annee' => 1999,
            'rating' => 11,
            'photo' => 'https://www.cinetrafic.fr/images/affiches/original/aff_1587020190610160005.jpg'
          ],

          [
            'id' => 8,
            'titre' => 'Ben',
            'categorie'=> 'Comedie',
            'resume' => 'Best Man',
            'duree' => 95,
            'realisateur_id' => 4,
            'producteur_id' => 2,
            'annee' => 2004,
            'rating' => 13,
            'photo' => 'https://www.cinetrafic.fr/images/affiches/original/aff_1587020190610160005.jpg'
          ],

          [
            'id' => 9,
            'titre' => 'xavierPoche',
            'categorie'=> 'Amour',
            'resume' => 'Yer poche',
            'duree' => 45,
            'realisateur_id' => 1,
            'producteur_id' => 5,
            'annee' => 2004,
            'rating' => 1,
            'photo' => 'https://www.cinetrafic.fr/images/affiches/original/aff_1587020190610160005.jpg'
          ],


          [
            'id' => 10,
            'titre' => 'xavierCool',
            'categorie'=> 'Amour',
            'resume' => 'Yer cool',
            'duree' => 25,
            'realisateur_id' => 2,
            'producteur_id' => 2,
            'annee' => 2006,
            'rating' => 8,
            'photo' => 'https://www.cinetrafic.fr/images/affiches/original/aff_1587020190610160005.jpg'
          ],
          
        ]);
        }
        
}