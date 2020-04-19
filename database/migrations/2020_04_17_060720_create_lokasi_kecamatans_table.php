<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLokasiKecamatansTable extends Migration
{

    public function up()
    {
        Schema::create('lokasi_kecamatans', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('kode_pos');
            $table->integer('lokasi_kotakabs_id')->unsigned();
            $table->foreign('lokasi_kotakabs_id')->references('id')->on('lokasi_kotakabs');
            // Constraints declaration
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('lokasi_kecamatans');
    }
}
