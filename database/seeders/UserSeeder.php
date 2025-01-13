<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // akun admin
        $admin = User::create([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
            'status' => 'active',
        ]);

        // akun driver
        $driver = User::create([
            'username' => 'driver',
            'email' => 'driver@example.com',
            'password' => bcrypt('password'),
            'role' => 'driver',
            'status' => 'active',
        ]);
        UserDetail::create([
            'user_id' => $driver->id,
            'phone_number' => '08123456789',
            'address' => 'Jl. Sorowajan No. 1, Banguntapan',
        ]);
    }
}
