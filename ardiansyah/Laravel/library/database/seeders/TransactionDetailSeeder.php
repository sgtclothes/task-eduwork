<?php

namespace Database\Seeders;

use App\Models\TransactionDetail;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 20; $i++) {
            $detailtransaction = new TransactionDetail;

            $detailtransaction->transaction_id = rand(1, 20);
            $detailtransaction->book_id = rand(1, 20);
            $detailtransaction->qty = rand(10, 20);

            $detailtransaction->save();
        }
    }
}