<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('materis', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul materi
            $table->foreignId('kategori_id')->constrained('kategoris')->onDelete('cascade');
            $table->string('overview'); // Ringkasan singkat
            $table->string('benefit'); // Manfaat
            $table->text('deskripsi'); // Deskripsi lengkap
            $table->string('url_video'); // URL Video Youtube
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materis');
    }
};
