<?php

namespace Database\Seeders;

use App\Models\TransactionDetail;
use faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i < 20; $i++){
            $TransactionDetail = new TransactionDetail();

            $TransactionDetail->transaction_id = rand(1,20);
            $TransactionDetail->book_id = rand(1,20);

            $TransactionDetail->qty = $faker->randomNumber(2);

            $TransactionDetail->save();
        } 
    }
}
