<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Set the tables for seeding
     *
     * @var array
     */
    protected $tables = ['users', 'statuses', 'comments', 'likes', 'follows', 'password_resets', 'jobs'];

    /**
     * Set the seeder classnames
     *
     * @var array
     */
    protected $seeders = ['UsersTableSeeder', 'StatusesTableSeeder'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        // Disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->cleanDatabase();

        foreach ($this->seeders as $seeder) {
            $this->call($seeder);
        }

        // Enable foreign key check for this connection after running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    /**
     * Truncate the databases before seeding
     */
    public function cleanDatabase()
    {
        foreach ($this->tables as $table) {
            DB::table($table)->truncate();
        }
    }
}
