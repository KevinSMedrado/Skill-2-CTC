<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            DB::table('members')->insert([
                'email' => $faker->unique()->safeEmail,
                'age' => $faker->numberBetween(18, 80),
                'fullName' => $faker->name(),
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'professionalsummary' => $faker->word
            ]);
        }
    }
}
