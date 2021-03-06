<?php

use Illuminate\Database\Seeder;
use App\Http\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		User::insert([
            [
                'first_name' => 'Stan',
                'last_name' => 'Test',
                'email' => 'sunnystas@gmail.com',
                'password' => Hash::make('admin'),
                'role_id' => '1',
            ],
            [
                'first_name' => 'Stan',
                'last_name' => 'Test',
                'email' => 'sunnystas2@gmail.com',
                'password' => Hash::make('admin'),
                'role_id' => '2',
            ],
        ]);
    }
}
