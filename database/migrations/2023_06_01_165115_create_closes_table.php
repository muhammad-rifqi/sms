<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('closes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_tiket');
            $table->string('no_close');
            $table->string('tanggal_close');
            $table->string('pengaduan');
            $table->text('penutupan');
            $table->integer('status');
            $table->string('operator');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('closes');
    }
}
