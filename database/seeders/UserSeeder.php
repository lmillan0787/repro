<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id'       => 1,
                'name'     => 'Admin',
                'email'    => 'admin@mail.com',
                'password' => Hash::make('12345678')
            ],
            [
                'id'       => 2,
                'name'     => 'User',
                'email'    => 'user@mail.com',
                'password' => Hash::make('12345678')
            ],
        ];

        foreach ($users as $user) {
           User::create($user);
        }
    }
}
