<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for($i=1; $i <= 5; $i++){
            DB::table('users')->insert([
                //'id' => $faker->numberBetween(1,5),
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('admin12345'),
            ]);
        }
    }
}
