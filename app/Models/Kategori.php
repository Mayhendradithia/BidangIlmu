<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategoris';
    // Menambahkan 'nama' ke dalam fillable untuk mass assignment
    protected $fillable = ['nama'];
}
