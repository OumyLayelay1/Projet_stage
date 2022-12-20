<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Search;

class SearchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i <= 1; $i++){
            $search = New Search;
            $search->image = $faker->image;
            $search->name = $faker->name;
            $search->save();
        }
        
    }
}
