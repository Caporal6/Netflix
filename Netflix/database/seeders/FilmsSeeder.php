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
            'photo' => 'https://th.bing.com/th/id/R.c2b0e8fc2683c01832134477c96ea6d8?rik=GzfJFvzM9AS2tw&pid=ImgRaw&r=0'
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
            'photo' => 'https://i.pinimg.com/originals/a6/f7/03/a6f703744d5d2c1e5a5a110272c97b2f.jpg'
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
            'photo' => 'https://www.themoviedb.org/t/p/original/wysly5f5sJdaVzx89407AWJlHJN.jpg'
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
            'photo' => 'https://www.themoviedb.org/t/p/original/mKYkNro2btaWMsnYSuyqrBdHQo3.jpg'
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
            'photo' => 'https://th.bing.com/th/id/OIP.9Rs4x9IDtcsCrVdQOkTJagHaLH?pid=ImgDet&rs=1'
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
            'photo' => 'https://media-cache.cinematerial.com/p/500x/atagiqxs/the-conjuring-2-movie-cover.jpg?v=1469576031'
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
            'photo' => 'https://www.themoviedb.org/t/p/original/v3iwugzv5kmsK4zmyEtzG5S7lOf.jpg'
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
            'photo' => 'https://www.juglo.pk/images/detailed/121/779d54adf6cc9cc1724cd1f0c60c52be.jpg'
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
            'photo' => 'https://th.bing.com/th/id/OIP.CJDOUwnRxSSSX0Wxbp5mzAHaKi?pid=ImgDet&rs=1'
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
            'photo' => 'https://www.themoviedb.org/t/p/original/oJS0qxNfMdMcFnEZbUbB5q2Olik.jpg'
          ],
          
        ]);
        }
        
}