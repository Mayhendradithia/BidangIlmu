<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameHargaToPriceInMateris extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('materis', function (Blueprint $table) {
            $table->renameColumn('harga', 'price'); // Mengubah nama kolom 'harga' menjadi 'price'
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
            $table->renameColumn('price', 'harga'); // Membalikkan perubahan jika migrasi di-rollback
        });
    }
}
