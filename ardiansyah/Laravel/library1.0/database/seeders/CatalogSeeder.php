<?php

namespace Database\Seeders;

use App\Models\Catalog;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        for ($i=0; $i < 4; $i++) { 
            # code...
            $catalog = new Catalog();

            $catalog->name = $faker->randomElement(['Buku Islami', 'Buku Anak-anak', 'Buku Ekonomi', 'Buku Technology']);

            $catalog->save();
         }

    }
}
