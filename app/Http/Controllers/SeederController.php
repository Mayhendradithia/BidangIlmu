<?php

// app/Http/Controllers/SeederController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class SeederController extends Controller
{
    public function runSeeder(Request $request)
    {
        // Menjalankan seeder menggunakan Artisan
        Artisan::call('db:seed', ['--class' => 'DatabaseAdminSeeder']); // Ganti dengan nama seeder sesuai kebutuhan

        // Mengembalikan response sukses
        return response()->json(['message' => 'Seeder has been run!']);
    }
}

