<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

//	    $this->call(CitiesSeeder::class);
	    $this->call(SchoolsSeeder::class);

        Model::reguard();
    }
}
