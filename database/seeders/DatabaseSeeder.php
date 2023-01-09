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
        // \App\Models\User::factory(10)->create();
        $this->call([
            SearchSeeder::class
        ]);

        for ($i = 1; $i < 21; $i++) {
            DB::table('galleri_images')->insert(['name' => 'GalleriImage ' . $i, 'galleri_image_id' => rand(1, 4)]);
        }
    }
}
