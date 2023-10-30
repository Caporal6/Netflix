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

          ]);
    }
}
