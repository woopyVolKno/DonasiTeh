<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'fullname'=> 'Admin',
            'phone_number' => '0893472380',
            'email' => 'nabila@gmail.com',
            'password' => bcrypt('admin'),
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'fullname'=> 'User',
            'phone_number' => '0893472380',
            'email' => 'joengwoo@gmail.com',
            'password' => bcrypt('admin'),
        ]);
        
        $user->assignRole('admin');
    }
}
