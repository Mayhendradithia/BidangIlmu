<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vidio extends Model
{
    use HasFactory;
    protected $table = 'vidios';
    protected $fillable = [
        'title',
        'kategori_id',
        'overview',
        'user_id',
        'benefit',
        'description',
        'video'
    ];
}
