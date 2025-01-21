<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_drop_transactions_table.php

public function up()
{
    Schema::dropIfExists('transactions'); // Hapus tabel 'transactions'
}

public function down()
{
    // Kalau migrasi di-rollback, buat kembali tabel
    Schema::create('transactions', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('materi_id');
        $table->decimal('price', 10, 2);
        $table->enum('status', ['pending', 'success']);
        $table->string('snap_token')->nullable();
        $table->timestamps();
    });
}

};
