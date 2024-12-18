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
    ];

    /**
     * Relasi ke model Kategori
     * Setiap materi berhubungan dengan satu kategori
     */
    // Di model Materi
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id'); // Relasi ke Kategori
    }
}
