<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableRegistrasiGadai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrasi_gadai', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal_gadai');
            $table->date('tanggal_pengembalian_gadai');
            $table->float('bunga');
            $table->float('nominal');
            
            $table->integer('kelas_pelayanan_id')->unsigned();
            $table->foreign('kelas_pelayanan_id')->references('id')->on('kelas_pelayanan');

            $table->integer('biodata_nasabah_id')->unsigned();
            $table->foreign('biodata_nasabah_id')->references('id')->on('biodata_nasabah');
            
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
        Schema::drop('registrasi_gadai');
    }
}
