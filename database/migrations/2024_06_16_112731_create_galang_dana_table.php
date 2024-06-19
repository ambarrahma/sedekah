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
        Schema::create('galang_dana', function (Blueprint $table) {
            $table->id();
            $table->string('nama_galang_dana');
            $table->string('nama_organisasi');
            $table->string('kategori_donasi');
            $table->bigInteger('target_donasi')->change();
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galang_dana');
    }
};
