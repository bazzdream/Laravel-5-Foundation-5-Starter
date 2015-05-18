<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User as User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create([
			'name' => 'admin',
			'email' => 'admin@local.dev',
			'password' => Hash::make('password')
		]);
	}
}
