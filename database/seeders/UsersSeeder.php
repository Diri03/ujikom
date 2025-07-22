<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id_level' => 1,
                'name' => 'Diriansyah',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123')
            ],
            [
                'id_level' => 2,
                'name' => 'Budi',
                'email' => 'budi@gmail.com',
                'password' => Hash::make('budi1234')
            ],
            [
                'id_level' => 3,
                'name' => 'Agung',
                'email' => 'agung@gmail.com',
                'password' => Hash::make('agung123')
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
