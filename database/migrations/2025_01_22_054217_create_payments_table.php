<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('materi_id');
            $table->string('phone_number');
            $table->decimal('price', 15, 2);
            $table->string('proof')->nullable(); // untuk gambar bukti pembayaran
            $table->string('number_transaction')->unique();
            $table->timestamps();
    
            // Relasi
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('materi_id')->references('id')->on('materis')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('payments');
    }
    
};
