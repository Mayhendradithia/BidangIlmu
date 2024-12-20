<?php
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin01',
            'email' => 'admin01@example.com',
            'password' => bcrypt('admin123'),
        ]);
    }
}
