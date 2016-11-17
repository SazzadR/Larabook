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
        $users = User::where('id' ,'>' ,0)->pluck('id')->toArray();

        foreach (range(1, 50) as $index) {
            Status::create([
                'user_id' => $faker->randomElements($users),
                'body' => $faker->sentence
            ]);
        }
    }
}
