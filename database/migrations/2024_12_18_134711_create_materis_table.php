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
            $table->foreignId('kategori_id')->constrained('kategoris')->onDelete('cascade'); // Relasi kategori
            $table->string('overview'); // Ringkasan singkat
            $table->string('benefit'); // Manfaat
            $table->text('deskripsi'); // Deskripsi lengkap
            $table->string('url_video'); // URL Video Youtube
            $table->integer('price')->nullable(); // Harga opsional
            $table->boolean('is_premium')->default(false); // Premium atau tidak (default false)
            $table->string('payment')->nullable(); // Metode pembayaran opsional
            $table->string('password')->nullable(); // Password opsional
            $table->timestamps(); // Timestamps
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
