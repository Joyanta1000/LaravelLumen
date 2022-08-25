<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
$faker->addProvider(new \Mmo\Faker\PicsumProvider($faker));
$faker->addProvider(new \Mmo\Faker\LoremSpaceProvider($faker));
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'userimage' => $faker->picsum(null, 400, 400, true),
        ]);
    }
}
