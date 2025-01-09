<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'admin1',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ]
        );

        Admin::firstOrCreate(
            ['email' => 'bidangilmu@email.com'],
            [
                'name' => 'admin2',
                'password' => Hash::make('bidangilmu2025'),
                'role' => 'admin',
            ]
        );

        Admin::firstOrCreate(
            ['email' => 'dummy@email.com'],
            [
                'name' => 'dummy',
                'password' => Hash::make('dummy2025'),
                'role' => 'admin',
            ]
        );
    }
}
