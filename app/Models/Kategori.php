<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    // Tentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nama',
    ];

    /**
     * Relasi ke model Materi
     * Satu kategori memiliki banyak materi
     */
    // Di model Kategori
    public function materis()
    {
        return $this->hasMany(Materi::class, 'kategori_id');
    }
}
