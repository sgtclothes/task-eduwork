<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0; $i <= 10; $i++){
            $book = new Book();

            $book->isbn = $faker->randomNumber(6);
            $book->title = $faker->name;
            $book->year = rand(2010, 2020);
            $book->publisher_id = rand(1,11);
            $book->author_id = rand(1,11);
            $book->catalog_id = rand(1,11);
            $book->qty = rand(10,20);
            $book->price = rand(1000,50000);
            $book->save();
        }
    }
}