<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModeldelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modeldels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('bupatiwalkot');
            $table->string('luas');
            $table->string('penduduk');
            $table->string('kepadatan');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('desa');
            $table->string('lambang');
            $table->string('petalokasi');
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
        Schema::dropIfExists('modeldels');
    }
}
