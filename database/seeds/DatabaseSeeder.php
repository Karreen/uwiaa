<?php

use database\seeds\UserTableSeeder;


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('database\seeds\UserTableSeeder');
        $this->command->info('Users table seeded!');

        $this->call('database\seeds\RoleTableSeeder');
        $this->command->info('Roles table seeded!');

        $this->call('database\seeds\PostsTableSeeder');
        $this->command->info('Posts table seeded!');

//        $this->call('database\seeds\ProfileTableSeeder');
//        $this->call('database\seeds\RoleUserTableSeeder');
//        $this->call('database\seeds\ProfileUserTableSeeder');
	}

}
