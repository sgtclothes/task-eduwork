<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0; $i < 12; $i++){
            $product = new Product();

            $product->customer_id = rand(1,11);
            $product->code = $faker->randomNumber(6);
            $product->name = $faker->name;
            $product->qty = rand(10, 30);
            $product->price = rand(10000, 100000);
            $product->save();
        }
    }
}