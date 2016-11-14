<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'username' => 'sazzad',
        	'email' => 'sazzad@gmail.com',
        	'password' => bcrypt('password'),
        	'created_at' => Carbon::now('Asia/Dhaka'),
        	'updated_at' => Carbon::now('Asia/Dhaka')
    	]);
    }
}
