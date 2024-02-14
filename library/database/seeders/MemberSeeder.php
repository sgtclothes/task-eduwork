<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0; $i < 5; $i++){
            $member = new Member();

            $member->name = $faker->name;
            $member->gender = $faker->sex;
            $member->phone = '0821' . $faker->randomNumber(8);
            $member->address = $faker->address;
            $member->email = $faker->email;
            $member->save();
        }
    }
}