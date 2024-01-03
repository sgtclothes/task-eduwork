<?php

namespace Database\Seeders;

use App\Models\Book;
use faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i < 20; $i++){
            $book = new Book;

            $book->isbn = $faker->randomNumber(8);
            $book->titile = $faker->name;
            $book->year = rand(2010,2024);

            $book->publisher_id = rand(1,20);
            $book->author_id = rand(1,20);
            $book->catalog_id = rand(1,20);

            $book->qty = rand(10,20);
            $book->price = rand(10000,20000);

            $book->save();
        } 
    }
}
