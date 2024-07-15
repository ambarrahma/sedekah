<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTerkumpulToGalangDanaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('galang_dana', function (Blueprint $table) {
            $table->bigInteger('terkumpul')->default(0);
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
            $table->dropColumn('terkumpul');
        });
    }
}
