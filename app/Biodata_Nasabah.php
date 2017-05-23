<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata_Nasabah extends Model
{
    protected $table = 'biodata_nasabah';
    protected $fillable = ['nama','tempat_lahir','tanggal_lahir','jenis_kelamin','no_telepon','alamat','pekerjaan','no_ktp','email','status','operator_id'];

    public function Operator()
    {
    	return $this->belongsTo(Operator::class,'operator_id');
    }
    public function Registrasi_Gadai()
    {
        return $this->hasMany(Registrasi_Gadai::class,'registrasi_gadai_id');
    }

    public function listBiodataNasabah(){
        $out = [];
        foreach ($this->all() as $bn) {
            $out[$bn->id] = "{$bn->nama} ({$bn->no_ktp})";
        }
        return $out;
    }

}
