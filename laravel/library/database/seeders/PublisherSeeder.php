<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i=0; $i < 10 ; $i++) { 
            $publiser = new Publisher;

            $publiser->name = $faker->name;
            $publiser->email = $faker->email;
            $publiser->phone_number = '0821'.$faker->randomNumber(8);
            $publiser->address = $faker->address;

            $publiser->save();
        }
    }
}
