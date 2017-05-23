<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = ['jenis_barang','harga_barang','berat_barang','dekripsi','kategori_barang_id'];

    public function Barang_Gadai()
    {
        return $this->hasMany(Barang_Gadai::class,'barang_id');
    }
    public function Kategori_Barang()
    {
        return $this->belongsTo(Kategori_Barang::class,'kategori_barang_id');
    }

    


    
}
