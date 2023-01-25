<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gender::firstOrCreate([
            'name' => 'Action',
        ]);
        Gender::firstOrCreate([
            'name' => 'Adventure',
        ]);
        Gender::firstOrCreate([
            'name' => 'Comedy',
        ]);
        Gender::firstOrCreate([
            'name' => 'Drama',
        ]);
        Gender::firstOrCreate([
            'name' => 'Musical',
        ]);
        Gender::firstOrCreate([
            'name' => 'Non-Fiction',
        ]);
    }
}
