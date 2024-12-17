<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mitra;

class MitraSeeder extends Seeder
{
    public function run()
    {
        Mitra::create([
            'image' => 'mitra_images/image1.jpg',  // Sesuaikan dengan gambar yang ada
        ]);

        Mitra::create([
            'image' => 'mitra_images/image2.jpg',  // Sesuaikan dengan gambar yang ada
        ]);
    }
}
