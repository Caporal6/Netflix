<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ActeurFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('acteur_film')->insert([
            ['acteur_id'=> 1,
            'film_id' => 2
            ],
             ['acteur_id'=> 2,
            'film_id' => 3
            ],
             ['acteur_id'=> 4,
            'film_id' => 3
            ],
            ['acteur_id'=> 3,
            'film_id' => 2
            ],
             ['acteur_id'=> 4,
            'film_id' => 2
            ],
             ['acteur_id'=> 5,
            'film_id' => 2
            ],
             ['acteur_id'=> 3,
            'film_id' => 1
            ]
         ]);

         
    }
}