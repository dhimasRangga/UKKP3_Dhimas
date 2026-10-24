<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat Akun Admin
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password123'), // Ganti password sesuai keinginan
            'no_telepon' => '081234567890',
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'costumer',
            'email' => 'costumer@gmail.com',
            'password' => Hash::make('password123'), // Ganti password sesuai keinginan
            'no_telepon' => '081234567890',
            'role' => 'costumer',
        ]);
    }
}