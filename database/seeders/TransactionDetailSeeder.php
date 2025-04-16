<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i<=5; $i++){
            DB::table('transaction_details')->insert([
                'transaction_id' => $faker->numberBetween(1,5),
                'item_id' => $faker->numberBetween(1,5),
                'qty' => $faker->numberBetween(20,100),
                'subtotal' => $faker->numberBetween(1,5)
            ]);
        }
    }
}
