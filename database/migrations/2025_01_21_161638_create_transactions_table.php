<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// database/migrations/xxxx_xx_xx_create_transactions_table.php

public function up()
{
    Schema::create('transactions', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id'); // Kolom untuk user_id
        $table->unsignedBigInteger('materi_id'); // Kolom untuk materi_id
        $table->decimal('price', 10, 2); // Kolom harga transaksi
        $table->enum('status', ['pending', 'success']); // Status transaksi
        $table->string('snap_token')->nullable(); // Kolom untuk menyimpan snap token dari Midtrans
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('transactions');
}

};
