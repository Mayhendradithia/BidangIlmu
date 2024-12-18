<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'tittle',
        'overview',
        'kategori_id',
        'url_video',
        'benefit',
        'description',
    ];

    

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
        $table->unsignedBigInteger('kategori_id');
        $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade');

    }
}
