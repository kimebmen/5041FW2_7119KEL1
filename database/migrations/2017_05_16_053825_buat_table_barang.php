<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenis_barang',50);
            $table->float('harga_barang');
            $table->float('berat_barang');
            $table->string('deskripsi',50);
            
            $table->integer('kategori_barang_id')->unsigned();
            $table->foreign('kategori_barang_id')->references('id')->on('kategori_barang');
            
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
        Schema::drop('barang');
    }
}
