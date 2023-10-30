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
              'photo' => 'https://th.bing.com/th/id/R.e36a6bbc40ad0b02dc69a6a1fc0692fd?rik=mY%2b2Ne%2bAuW9iaw&riu=http%3a%2f%2fi.huffpost.com%2fgen%2f989231%2fimages%2fo-QUENTIN-TARANTINO-facebook.jpg&ehk=GQ%2fcimYfw%2f9ERS2391cA4Rq%2fhOylM%2fIvrkSxh69CNvQ%3d&risl=&pid=ImgRaw&r=0',
            ],
            [
                'id' => 2,
                'nom' => 'Ben Affleck',
                'date_naissance' => '15 mai 1923',
                'lieux' => 'Mtl nord',
                'photo' => 'https://th.bing.com/th/id/R.39f39bc41e3ba47f201494bac4967a1f?rik=8qH4K8yWZaB5Nw&riu=http%3a%2f%2fwww.aceshowbiz.com%2fimages%2fwennpic%2fben-affleck-2013-ee-british-academy-film-awards-01.jpg&ehk=F0vsYxUmrrZOSijWgrjJr4WCJF1yklWFPgUgwJB1%2fr0%3d&risl=&pid=ImgRaw&r=0',
            ],

            [
                'id' => 3,
                'nom' =>  "Maya l'abeile",
                'date_naissance' => '06 mai 1999',
                'lieux' => 'Floride',
                'photo' => 'https://th.bing.com/th/id/OIP.-ruKXGRdAC8wJqTG5UNP9wHaHa?pid=ImgDet&rs=1',
              ],
              [
                  'id' => 4,
                  'nom' => 'Caillou',
                  'date_naissance' => '15 mai 2012',
                  'lieux' => 'rive sud mtl',
                  'photo' => 'https://th.bing.com/th/id/R.ff5ea5f781c2dfdbe42bf5bf7206b12f?rik=CFdrv8c1lKJxhg&riu=http%3a%2f%2fimg1.wikia.nocookie.net%2f__cb20120608235110%2fcaillou%2fimages%2fb%2fb4%2fCaillou_Logo.jpg&ehk=NQ2Kt6PuxOxUw5E9X3hnCZqCY%2fjj5Gsz1CE9OIqQVDM%3d&risl=&pid=ImgRaw&r=0',
              ],

              [
                'id' => 5,
                'nom' =>  "The Rock",
                'date_naissance' => '06 juin 1999',
                'lieux' => 'Trois-rivières',
                'photo' => 'https://th.bing.com/th/id/R.b40b71c7354d65364b4f96db5591ac45?rik=mUOG%2fr7O0ETLeg&riu=http%3a%2f%2f2.bp.blogspot.com%2f-V7_4YVFwFXg%2fT6oVvbSxcfI%2fAAAAAAAAF20%2fb9iTPbBeFk0%2fs1600%2fThe%2bRock-wallpapers-04.jpg&ehk=NWPaIfqyIfSSlF0%2bnCks4mj4yDgbkcoSQBlpRBAxQ%2fw%3d&risl=&pid=ImgRaw&r=0',
              ],

              [
                'id' => 6,
                'nom' =>  "Brendan Fraser",
                'date_naissance' => '16 juin 2010',
                'lieux' => 'Floride',
                'photo' => 'https://th.bing.com/th?id=ODL.d47a2bf9f3d00c10fee262a6ca0643ce&w=225&h=300&c=10&rs=1&qlt=99&o=6&pid=13.1',
              ],

              [
                'id' => 7,
                'nom' =>  "Austin Butler",
                'date_naissance' => '16 mars 2010',
                'lieux' => 'Texas',
                'photo' => 'https://th.bing.com/th?id=OSK.330b0e8c5aa5fd80c6ad4fd865ca97cf&w=120&h=168&c=4&rs=1&qlt=80&o=6&pid=SANGAM',
              ],

              [
                'id' => 8,
                'nom' =>  "Nicolas Cage",
                'date_naissance' => '09 mai 1888',
                'lieux' => 'Texas',
                'photo' => 'https://th.bing.com/th/id/OIP.9nRrtsDRreSEblq4cqu_ZgHaK7?w=198&h=293&c=7&r=0&o=5&pid=1.7',
              ],


              [
                'id' => 9,
                'nom' =>  "Jake Gyllenhaal",
                'date_naissance' => '22 Decembre 2000',
                'lieux' => 'Montreal',
                'photo' => 'https://th.bing.com/th/id/OIP.AxBvP_MoXklo7eFby9HhzgHaLD?w=198&h=296&c=7&r=0&o=5&pid=1.7',
              ],

              [
                'id' => 10,
                'nom' =>  "Brad Pitt",
                'date_naissance' => '13 Decembre 1979',
                'lieux' => 'Russie',
                'photo' => 'https://th.bing.com/th/id/OIP._daLgz49nJe7nFgfuWzNFgHaKC?w=198&h=268&c=7&r=0&o=5&pid=1.7',
              ],






          ]);
    }
}
