<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            ['name' => 'Admon', 'email' => 'admon@robotics.com', 'role' => 'Administrative'],
            ['name' => 'Tecmilenio', 'email' => 'tecmilenio@robotics.com', 'role' => 'Teacher'],
            ['name' => 'Student', 'email' => 'student@robotics.com', 'role' => 'Student'],
        ];

        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make('Adm@2022'),
                'role' => $user['role'],
            ]);
        }
    }
}
