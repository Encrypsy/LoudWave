<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Malya admin',
            'email' => 'malyadmin@gmail.com',
            'password' => bcrypt('admin#123'),
            'role' => 'admin',
            'status' => 'active',
        ]);

        User::create([
            'name' => 'Malya editor',
            'email' => 'malyaeditor@gmail.com',
            'password' => bcrypt('editor#123'),
            'role' => 'editor',
            'status' => 'active',
        ]);

        User::create([
            'name' => 'Malya',
            'email' => 'malyamaritza@gmail.com',
            'password' => bcrypt('malya#123'),
            'role' => 'user',
            'status' => 'active',
        ]);
    }
}
