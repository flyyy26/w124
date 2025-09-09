<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@w124mbcibandungchapter.com'], // cek kalau sudah ada user dengan email ini
            [
                'name' => 'Admin',
                'password' => Hash::make('mbciBandung@2025_'), // ganti sesuai kebutuhan
            ]
        );
    }
}
