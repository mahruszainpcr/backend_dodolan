<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLokasiKotakabsTable extends Migration
{

    public function up()
    {
        Schema::create('lokasi_kotakabs', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('lokasi_propinsis_id')->unsigned();
            $table->foreign('lokasi_propinsis_id')->references('id')->on('lokasi_propinsis');
            // Constraints declaration

        });
    }

    public function down()
    {
        Schema::drop('lokasi_kotakabs');
    }
}
