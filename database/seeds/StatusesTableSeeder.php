<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\Status;
use App\User;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $users = User::all()->pluck('id')->toArray();

        foreach (range(1, 500) as $index) {
            Status::create([
                'user_id' => $faker->randomElement($users),
                'body' => $faker->sentence,
                'created_at' => $faker->dateTime()
            ]);
        }
    }
}
