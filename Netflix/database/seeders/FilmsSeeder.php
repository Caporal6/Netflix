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
            'titre' => 'Pulp Fiction',
            'categorie'=> 'Action',
            'resume' => 'Des mafieux vraiment cool',
            'duree' => 25,
            'realisateur_id' => 1,
            'producteur_id' => 1,
            'annee' => 2004,
            'rating' => 5,
            'photo' => 'Pulp Fiction-655b9ee95747d.jpg'
          ],

          [
            'id' => 2,
            'titre' => 'Interstellar',
            'categorie'=> 'Action',
            'resume' => "Voyage dans l'univers",
            'duree' => 65,
            'realisateur_id' => 1,
            'producteur_id' => 2,
            'annee' => 2011,
            'rating' => 10,
            'photo' => 'Interstellar-655b9ffb636c8.jpg'
          ],

          [
            'id' => 3,
            'titre' => 'Jumanji',
            'categorie'=> 'Aventure',
            'resume' => 'Monopoly Hardcore',
            'duree' => 95,
            'realisateur_id' => 3,
            'producteur_id' => 1,
            'annee' => 1995,
            'rating' => 7,
            'photo' => 'wer-6568fb7931ac0.jpg'
          ],

          [
            'id' => 4,
            'titre' => 'TinTin',
            'categorie'=> 'Aventure',
            'resume' => 'Le blond',
            'duree' => 56,
            'realisateur_id' => 1,
            'producteur_id' => 4,
            'annee' => 2011,
            'rating' => 10,
            'photo' => 'tintin-6568fbab0031c.jpg'
          ],

          [
            'id' => 5,
            'titre' => 'Annabelle',
            'categorie'=> 'Horreur',
            'resume' => 'Le film fait vraiment peur',
            'duree' => 25,
            'realisateur_id' => 3,
            'producteur_id' => 2,
            'annee' => 2014,
            'rating' => 7,
            'photo' => 'Annabelle-655b9fe44d6f6.jpg'
          ],

          [
            'id' => 6,
            'titre' => 'The Conjuring 2',
            'categorie'=> 'Horreur',
            'resume' => 'Les esprits',
            'duree' => 11,
           'realisateur_id' => 3,
            'producteur_id' => 1,
            'annee' => 2016,
            'rating' => 3,
            'photo' => 'The Conjuring 2-655ba01404ec1.jpg'
          ],

          [
            'id' => 7,
            'titre' => 'Kung Fu Panda 3',
            'categorie'=> 'Comedie',
            'resume' => ';)',
            'duree' => 68,
            'realisateur_id' => 5,
            'producteur_id' => 1,
            'annee' => 2016,
            'rating' => 11,
            'photo' => 'Kung Fu Panda 3-655b9fa63c3c6.jpg'
          ],

          [
            'id' => 8,
            'titre' => 'Spider-Man Into the spider-verse',
            'categorie'=> 'Comedie',
            'resume' => 'Trop cool spider-man',
            'duree' => 95,
            'realisateur_id' => 4,
            'producteur_id' => 2,
            'annee' => 2004,
            'rating' => 13,
            'photo' => 'Spider-Man Into the spider-verse-655b9f5ced02f.jpg'
          ],

          [
            'id' => 9,
            'titre' => 'The notebook',
            'categorie'=> 'Amour',
            'resume' => 'Quand même bon',
            'duree' => 45,
            'realisateur_id' => 1,
            'producteur_id' => 5,
            'annee' => 2000,
            'rating' => 1,
            'photo' => 'The notebook-655b9f3ff1ed7.jpg'
          ],


          [
            'id' => 10,
            'titre' => 'Magic Mike',
            'categorie'=> 'Amour',
            'resume' => 'Damn chiiillllll',
            'duree' => 25,
            'realisateur_id' => 2,
            'producteur_id' => 2,
            'annee' => 2006,
            'rating' => 8,
            'photo' => 'Magic Mike-655b9f8392d57.jpg'
          ],
          
        ]);
        }
        
}