<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\BarangRequest;
use App\Barang;
use App\Kategori_Barang; 

class BarangController extends Controller
{
    protected $informasi = 'Gagal melakukan aksi';
	
    public function awal()
    {
        $semuaBarang = Barang::all();
        return view('barang.awal', compact('semuaBarang'));
    }
    public function tambah()
    {      
        $kategori_barang = new Kategori_Barang;
        return view('barang.tambah',compact('kategori_barang'));
    	return $this->simpan();
    }       
    public function simpan(BarangRequest $input)
    {

        $barang = new Barang($input->only('kategori_barang_id'));
        $barang->deskripsi = $input->deskripsi;
            if($barang->save()) $this->informasi = "Barang berhasil disimpan";
            return redirect('barang')->with(['informasi'=>$this->informasi]);
    }

    public function lihat($id){
        $barang = Barang::find($id);
        return view('barang.lihat',compact('barang'));
    }
    public function edit($id){
        $barang = Barang::find($id);
        $kategori_barang = new Kategori_Barang;
        return view('barang.edit',compact('kategori_barang','barang'));
    }
    public function update($id, BarangRequest $input)
    {
        $barang = Barang::find($id);
        $barang->fill($input->only('kategori_barang_id'));
        if($barang->save()) $this->informasi = "Barang berhasil diperbarui";
        return redirect('barang')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id)
    {
        $barang = Barang::find($id);
        if($barang->delete()) $this->informasi = "Barang berhasil dihapus";
        return redirect('barang')-> with(['informasi'=>$this->informasi]);
    }
}
