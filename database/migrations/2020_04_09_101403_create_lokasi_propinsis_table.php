<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLokasiPropinsisTable extends Migration
{

    public function up()
    {
        Schema::create('lokasi_propinsis', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            // Constraints declaration

        });
    }

    public function down()
    {
        Schema::drop('lokasi_propinsis');
    }
}
