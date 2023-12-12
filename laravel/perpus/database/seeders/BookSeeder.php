<?php

namespace Database\Seeders;

use App\Models\Book;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            $book = new Book;

            $book->isbn = $faker->randomNumber(8);
            $book->title = $faker->name;
            $book->year = rand(2010, 2023);
            $book->publisher_id = rand(1, 10);
            $book->author_id = rand(1, 20);
            $book->catalog_id = rand(1, 5);
            $book->qty = rand(10, 20);
            $book->price = rand(20000, 50000);

            $book->save();
        }

    }
}
