<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0; $i <= 10; $i++){
            $author = new Customer();

            $author->name = $faker->name;
            $author->phone = '0821' . $faker->randomNumber(8);
            $author->address = $faker->address;
            $author->email = $faker->email;
            $author->save();
        }
    }
}