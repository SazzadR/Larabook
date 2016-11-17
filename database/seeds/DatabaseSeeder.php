<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Set the tables for seeding
     *
     * @var array
     */
    protected $tables = ['users', 'statuses'];

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
        $this->cleanDatabase();

        foreach ($this->seeders as $seeder) {
            $this->call($seeder);
        }
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
