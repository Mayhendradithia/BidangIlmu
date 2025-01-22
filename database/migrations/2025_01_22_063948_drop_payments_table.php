<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropPaymentsTable extends Migration
{
    public function up()
    {
        // Menghapus tabel 'payments'
        Schema::dropIfExists('payments');
    }

    public function down()
    {
        // Jika ingin memulihkan tabel ini, buat ulang tabel sesuai struktur semula
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('materi_id');
            $table->unsignedBigInteger('user_id');
            $table->decimal('price', 10, 2);
            $table->string('proof');
            $table->string('number_transaction');
            $table->timestamps();

            // Relasi foreign key (opsional, jika ada relasi)
            $table->foreign('materi_id')->references('id')->on('materis')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
}
