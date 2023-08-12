<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class publisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i <= 20; $i++) {
            $author = new Publisher();
            $author->name = $faker->name;
            $author->email = $faker->email;
            $author->phone_number = '0851' .  $faker->randomNumber(8);
            $author->address = $faker->address;

            $author->save();
        }
    }
}
