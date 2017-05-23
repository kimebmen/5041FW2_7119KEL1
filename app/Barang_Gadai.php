<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang_Gadai extends Model
{
	protected $table = 'barang_gadai';
    protected $fillable = ['deskripsi','registrasi_gadai_id','barang_id'];

    public function Barang()
    {
        return $this->belongsTo(Barang::class,'barang_id');
    }
    public function Registrasi_Gadai()
    {
        return $this->belongsTo(Registrasi_Gadai::class,'registrasi_gadai_id');
    }
}
