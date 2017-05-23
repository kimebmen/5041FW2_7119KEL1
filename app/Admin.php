<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $fillable = ['nama','pengguna_id'];

    public function Pengguna()
    {
    	return $this->belongsTo(Pengguna::class,'pengguna_id');
}
    public function getUsernameAttribute(){
        return $this->pengguna->username;
    }

    public function listAdmin(){
        $out = [];
        foreach ($this->all() as $admin) {
            $out[$admin->id] = "{$admin->nama}";
        }
        return $out;
    }
}


