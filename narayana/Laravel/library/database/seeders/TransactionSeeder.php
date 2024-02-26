<?php

namespace Database\Seeders;
use faker\Factory as Faker;
use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i < 20; $i++){
            $Transaction = new Transaction();

            $Transaction->member_id = rand(1,20);
            $Transaction->date_start = $faker->date;
            $Transaction->date_end = $faker->date;

            $Transaction->address = $faker->address;

            $Transaction->save();
        } 
    }
}
