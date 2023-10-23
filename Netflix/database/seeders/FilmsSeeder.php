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
            'categorie' => 'Action',
            'resume' => 'Peter Pan vas a la mer',
            'duree' => 160,
            'realisateur' => 1,
            'producteur' => 1,
            'annee' => 2004,
            'rating' => 5,
            'photo' => 'https://fr.web.img3.acsta.net/pictures/15/09/02/15/14/306583.jpg'
          ],

          [
            'id' => 2,
            'titre' => 'Malik',
            'categorie' => 'Action',
            'resume' => 'Money',
            'duree' => 65,
            'realisateur' => 1,
            'producteur' => 1,
            'annee' => 2002,
            'rating' => 10,
            'photo' => 'https://fr.web.img6.acsta.net/medias/nmedia/18/94/58/89/20488144.jpg'
          ],

          [
            'id' => 3,
            'titre' => 'FX',
            'categorie' => 'Aventure',
            'resume' => 'Un peux Orto',
            'duree' => 95,
            'realisateur' => 1,
            'producteur' => 1,
            'annee' => 2006,
            'rating' => 7,
            'photo' => 'https://fr.web.img6.acsta.net/medias/nmedia/18/95/10/49/20510049.jpg'
          ],

          [
            'id' => 4,
            'titre' => 'Dai',
            'categorie' => 'Aventure',
            'resume' => 'Casse couille',
            'duree' => 56,
            'realisateur' => 1,
            'producteur' => 1,
            'annee' => 2008,
            'rating' => 10,
            'photo' => 'https://www.avoir-alire.com/IMG/arton24284.jpg'
          ],

          [
            'id' => 5,
            'titre' => 'Alex',
            'categorie' => 'Horreur',
            'resume' => 'El Daron',
            'duree' => 25,
            'realisateur' => 1,
            'producteur' => 1,
            'annee' => 2020,
            'rating' => 2,
            'photo' => 'https://fr.web.img6.acsta.net/pictures/19/12/09/09/26/0965861.jpg'
          ],

          [
            'id' => 6,
            'titre' => 'Maya',
            'categorie' => 'Horreur',
            'resume' => 'Best gf',
            'duree' => 11,
            'realisateur' => 1,
            'producteur' => 1,
            'annee' => 2021,
            'rating' => 3,
            'photo' => 'https://th.bing.com/th/id/R.fa886b35cb5eb6c24eae1d0f76ba9ef1?rik=m2a60GA5x6%2fkcw&riu=http%3a%2f%2ffr.web.img4.acsta.net%2fpictures%2f20%2f07%2f08%2f12%2f33%2f5415700.jpg&ehk=JDhMertvo4Nid7NuMqG2wj4ACnmCKAnxIvTPKZ0oBG4%3d&risl=&pid=ImgRaw&r=0'
          ],

          [
            'id' => 7,
            'titre' => 'Walid',
            'categorie' => 'Horreur',
            'resume' => ';)',
            'duree' => 68,
            'realisateur' => 1,
            'producteur' => 1,
            'annee' => 1999,
            'rating' => 11,
            'photo' => 'https://th.bing.com/th/id/R.967b99cfd567abd2ab9a9e9faada6a50?rik=NpOiMLOBo8dwjQ&riu=http%3a%2f%2ffr.web.img3.acsta.net%2fpictures%2f15%2f04%2f22%2f16%2f06%2f068738.jpg&ehk=FjPDsiJbQxBWNQ1ZhutTZ9nnFqlLN06yxkkV9eYx%2bJQ%3d&risl=&pid=ImgRaw&r=0'
          ],

          [
            'id' => 8,
            'titre' => 'Ben',
            'categorie' => 'Comedie',
            'resume' => 'Best Man',
            'duree' => 95,
            'realisateur' => 1,
            'producteur' => 1,
            'annee' => 2004,
            'rating' => 13,
            'photo' => 'https://www.cinetrafic.fr/images/affiches/original/aff_3707020191115192532.jpg'
          ],

          [
            'id' => 9,
            'titre' => 'xavierPoche',
            'categorie' => 'Comedie',
            'resume' => 'Yer poche',
            'duree' => 45,
            'realisateur' => 1,
            'producteur' => 1,
            'annee' => 2004,
            'rating' => 1,
            'photo' => 'https://th.bing.com/th/id/R.51454f74cee3ca1f35d7bf6b0c5ac4b8?rik=WKQABBH3GBOTvA&pid=ImgRaw&r=0'
          ],


          [
            'id' => 10,
            'titre' => 'xavierCool',
            'categorie' => 'Horreur',
            'resume' => 'Yer cool',
            'duree' => 25,
            'realisateur' => 1,
            'producteur' => 1,
            'annee' => 2006,
            'rating' => 8,
            'photo' => 'https://www.cinetrafic.fr/images/affiches/original/aff_5626020210109040337.jpg'
          ],
          

        ]);
        }
        
}
