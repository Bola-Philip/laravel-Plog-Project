<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'user 1',
            'email' => 'user@user.com',
            'password' => bcrypt('123456789'),
        ]);

        User::create([
            'name' => 'user 2',
            'email' => 'user2@user.com',
            'password' => bcrypt('123456789'),
        ]);
    }
}
