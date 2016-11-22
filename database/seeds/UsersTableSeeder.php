<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\User;

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

        foreach (range(1, 50) as $index) {
            User::create([
                'username' => $faker->unique()->word,
                'email' => $faker->email,
                'password' => bcrypt('secret')
            ]);
        }
    }
}
