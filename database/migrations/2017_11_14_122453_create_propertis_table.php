<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propertis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul_penjualan')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('luas_bangunan')->nullable();
            $table->integer('harga_permintaan')->nullable();
            $table->string('gambar')->nullable();
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
        Schema::drop('propertis');
    }
}
