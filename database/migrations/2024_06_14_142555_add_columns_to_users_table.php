<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Hanya tambahkan kolom jika belum ada
            if (!Schema::hasColumn('users', 'nama')) {
                $table->string('nama')->nullable(false);
            }
            if (!Schema::hasColumn('users', 'password')) {
                $table->string('password')->nullable(false);
            }
            if (!Schema::hasColumn('users', 'telepon')) {
                $table->string('telepon')->nullable();
            }
            if (!Schema::hasColumn('users', 'alamat')) {
                $table->string('alamat')->nullable(false);
            }
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Hapus kolom jika ada
            if (Schema::hasColumn('users', 'nama')) {
                $table->dropColumn('nama');
            }
            if (Schema::hasColumn('users', 'password')) {
                $table->dropColumn('password');
            }
            if (Schema::hasColumn('users', 'telepon')) {
                $table->dropColumn('telepon');
            }
            if (Schema::hasColumn('users', 'alamat')) {
                $table->dropColumn('alamat');
            }
        });
    }
}
