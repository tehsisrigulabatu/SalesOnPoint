<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i<=5; $i++){
            DB::table('transactions')->insert([
                //'id' => $faker->numberBetween(1,5),
                'user_id' => 1,
                'date' => $faker->date,
                'total' => $faker->numberBetween(20,100),
                'pay_total' => $faker->numberBetween(50000,100000)
            ]);
        }
    }
}
