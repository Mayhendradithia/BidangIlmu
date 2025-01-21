<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeHargaColumnTypeInMaterisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('materis', function (Blueprint $table) {
            // Mengubah tipe data kolom harga menjadi integer
            $table->integer('harga')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('materis', function (Blueprint $table) {
            // Jika rollback, ubah kembali tipe data harga menjadi decimal
            $table->decimal('harga', 10, 2)->change();
        });
    }
}
