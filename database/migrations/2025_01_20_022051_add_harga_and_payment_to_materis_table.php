<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('materis', function (Blueprint $table) {
            $table->decimal('harga', 10, 2)->nullable(); // Menambahkan kolom harga (nullable)
            $table->string('payment')->nullable(); // Menambahkan kolom payment (nullable)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('materis', function (Blueprint $table) {
            $table->dropColumn(['harga', 'payment']); // Menghapus kolom harga dan payment
        });
    }
};
