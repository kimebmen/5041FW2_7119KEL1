<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    protected $table = 'operator';
    protected $fillable = ['nama','pengguna_id'];

    public function Pengguna()
    {
    	return $this->belongsTo(pengguna::class,'pengguna_id');
    }
    public function getUsernameAttribute(){
        return $this->pengguna->username;
    }

    public function Biodata_Nasabah()
    {
    	return $this->hasMany(Biodata_Nasabah::class,'biodata_nasabah_id');
    }

    public function listOperator(){
        $out = [];
        foreach ($this->all() as $op) {
            $out[$op->id] = "{$op->nama}";
        }
        return $out;
    }

    public function listNama()
    {
        $out = [];
        foreach ($this->all() as $nama) {
            $out[$nama->id] = "{$nama->$biodata_nasabah->operator->nama}";
            $out[$nama->username] = "{$nama->$biodata_nasabah->operator->nama}";
        }
        return $out;
    }



}
