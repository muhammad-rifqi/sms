<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNamaToTiketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tikets', function (Blueprint $table) {
            $table->string('nama')->after('tanggal_masuk');
            $table->string('handphone')->after('nama');
            $table->string('email')->after('handphone');
            $table->string('ip_address')->after('email');
            $table->string('operator')->after('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tikets', function (Blueprint $table) {
            $table->dropColumn('nama');
            $table->dropColumn('handphone');
            $table->dropColumn('email');
            $table->dropColumn('ip_address');
            $table->dropColumn('operator');
        });
    }
}
