<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'Ayoola Peter',
            'email' => 'testuser@gmail.com',
            'password' => bcrypt('password')
        ];

        User::create($data);
    }
}
