<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $seeders =
            array(GenderSeeder::class,
            ClassificationSeeder::class,
            CastTypeSeeder::class,
            MovieSeeder::class);

        $this->call($seeders);
    }
}
