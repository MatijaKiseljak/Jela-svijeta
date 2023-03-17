<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach (range(1, 10) as $i) 
        {
            DB::table('jela')->insert([
            'naziv' => $faker->word,
            'opis' => $faker->sentence(),
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime()
            ]);
            DB::table('sastojci')->insert([
            'naziv' => $faker->word,
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime()
            ]);
            DB::table('kategorije')->insert([
            'naziv' => $faker->word,
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime()
            ]);
            DB::table('tagovi')->insert([
            'naziv' => $faker->word,
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime()
            ]);           
        }
    }
}
