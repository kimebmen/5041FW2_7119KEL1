<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableBarangGadai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_gadai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('deskripsi',50);
            
            $table->integer('registrasi_gadai_id')->unsigned();
            $table->foreign('registrasi_gadai_id')->references('id')->on('registrasi_gadai');
            
            $table->integer('barang_id')->unsigned();
            $table->foreign('barang_id')->references('id')->on('barang');
            
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
        Schema::drop('barang_gadai');
    }
}
