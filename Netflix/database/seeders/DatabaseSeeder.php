<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ActeursSeeders::class);
        $this->call(FilmsSeeder::class);
        $this->call(ActeurFilmSeeder::class);
        $this->call(UsagerSeeder::class);

    }

}
