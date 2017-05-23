<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableBiodataNasabah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_nasabah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',50);
            $table->string('tempat_lahir',50);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Pria', 'Wanita']);
            $table->string('no_telepon',13);
            $table->text('alamat');
            $table->string('pekerjaan',50);
            $table->string('no_ktp',50);
            $table->string('email',50);
            $table->string('status',50);
            $table->integer('operator_id')->unsigned();
            $table->foreign('operator_id')->references('id')->on('operator');
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
        Schema::drop('biodata_nasabah');
    }
}
