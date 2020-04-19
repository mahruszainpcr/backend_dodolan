<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLokasiKelurahansTable extends Migration
{

    public function up()
    {
        Schema::create('lokasi_kelurahans', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('lokasi_kecamatans_id')->unsigned();
            $table->foreign('lokasi_kecamatans_id')->references('id')->on('lokasi_kecamatans');
            // Constraints declaration
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('lokasi_kelurahans');
    }
}
