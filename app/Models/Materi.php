<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    // Tentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'title',
        'kategori_id',
        'overview',
        'benefit',
        'deskripsi',
        'url_video',
        'password',
        'harga',
        'payment',
        'is_premium',
    ];
    
    protected $casts = [
        'harga' => 'decimal:2',
    ];

    // Relasi ke kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id'); // Relasi ke Kategori
    }

    // Method untuk mengecek apakah materi memiliki password
    public function hasPassword()
    {
        return !empty($this->password); // Cek apakah materi memiliki password
    }

}

