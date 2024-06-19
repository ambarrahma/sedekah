<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGambarToGalangDanaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('galang_dana', function (Blueprint $table) {
            $table->string('gambar')->nullable(); // Tambahkan kolom gambar
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('galang_dana', function (Blueprint $table) {
            $table->dropColumn('gambar'); // Hapus kolom gambar
        });
    }
}
