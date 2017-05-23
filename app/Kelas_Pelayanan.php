<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas_Pelayanan extends Model
{
    protected $table = 'kelas_pelayanan';
    protected $fillable = ['jenis_pelayanan'];

    public function Registrasi_Gadai()
    {
    	return $this->hasMany(Registrasi_Gadai::class,'registrasi_gadai_id');
    }


    public function listKelasPelayanan(){
        $out = [];
        foreach ($this->all() as $kp) {
            $out[$kp->id] = "{$kp->jenis_pelayanan}";
        }
        return $out;
    }
}
