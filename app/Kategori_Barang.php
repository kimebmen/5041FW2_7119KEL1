<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori_Barang extends Model
{
    protected $table = 'kategori_barang';
    protected $fillable = ['jenis_kategori','harga_barang','berat_barang'];

    public function Barang()
    {
    	return $this->hasMany(Barang::class,'barang_id');
    }


    public function listKategori_Barang(){
        $out = [];
        foreach ($this->all() as $kb) {
            $out[$kb->id] = "{$kb->jenis_kategori} {$kb->harga_barang} {$kb->berat_barang}";
        }
        return $out;
    }

    public function listKategori_Barangg(){
        $out = [];
        foreach ($this->all() as $kb) {
            $out[$kb->id] = "{$kb->jenis_kategori}";
        }
        return $out;
    }

    public function listKategoriBarang()
    {
        $out = [];
        foreach ($this->all() as $kategoribrng) {
            $out[$kategoribrng->id] = "{$kategoribrng->$barang->kategori_barang->jenis_kategori} {$kategoribrng->$barang->kategori_barang->harga_barang} {$kategoribrng->$barang->kategori_barang->berat_barang}";
        }
        return $out;
    }
}
