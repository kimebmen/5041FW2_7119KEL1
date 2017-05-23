<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengguna extends Authenticatable implements AuthenticatableContract
{
 	protected $table = 'pengguna';
    protected $fillable = ['username','password','level'];

    public function admin()
    {
        return $this->hasOne(Admin::class,'admin_id');
    }

    public function Operator()
    {
        return $this->hasOne(operator::class,'operator_id');
    }


    public function getRememberToken()
    {
        return $this->remember_token; 
    }
    public function setRememberToken($value)
    {
        $this->remember_token=$value; 
    }
    public function getRememberTokenName()
    {
        return 'remember_token'; 
    }

    public function Adminlist()
    {
        $out = [];
        foreach ($this->all() as $ListAdmin) {
            $out[$Admin->id] = "{$ListAdmin->$admin->pengguna->username} {$ListAdmin->$admin->pengguna->password} {$ListAdmin->$admin->pengguna->level}";
        }
        return $out;
    }

    public function Operatorlist()
    {
        $out = [];
        foreach ($this->all() as $ListOperator) {
            $out[$ListOperator->id] = "{$ListOperator->$operator->pengguna->username} {$ListOperator->$operator->pengguna->password} {$ListOperator->$operator->pengguna->level}";
        }
        return $out;
    }
    
}
