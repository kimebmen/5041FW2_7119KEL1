<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrasi_Gadai extends Model
{

    protected $table = 'registrasi_gadai';
    protected $fillable = ['tanggal_gadai','tanggal_pengembalian_gadai','bunga','nominal','kelas_pelayanan_id','biodata_nasabah_id'];

    public function Registrasi_Gadai()
    {
        return $this->hasMany(Registrasi_Gadai::class,'registrasi_gadai_id');
    }
}
