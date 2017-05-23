<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kategori_Barang;

class Kategori_BarangController extends Controller
{
    public function awal()
    {
        return view ('kategori_barang.awal', ['data'=>Kategori_Barang::all()]) ;
    }
    public function tambah()
    {
        return view('kategori_barang.tambah');
    }
    public function simpan(Request $input)
    {
        $this->validate($input,[
                'jenis_kategori'=>'required',
                'harga_barang'=>'required',
                'berat_barang'=>'required'
            ]) ;
        $kategori_barang = new Kategori_Barang;
        $kategori_barang->jenis_kategori = $input->jenis_kategori;
        $kategori_barang->harga_barang = $input->harga_barang;
        $kategori_barang->berat_barang = $input->berat_barang;
        $informasi = $kategori_barang->save() ? 'Berhasil simpan data':'Gagal simpan data';
        return redirect('kategori_barang')->with(['informasi'=>$informasi]);
    }

    public function edit($id) 
    {
        $kategori_barang = Kategori_Barang::find($id);
        return view('kategori_barang.edit')->with(array('kategori_barang'=>$kategori_barang));
    }
    public function lihat($id) 
    {
        $kategori_barang = Kategori_Barang::find($id);
        return view('kategori_barang.lihat')->with(array('kategori_barang'=>$kategori_barang));
    }
 	public function update($id, Request $input)
    {
        $kategori_barang = Kategori_Barang::find($id);
        $kategori_barang->jenis_kategori = $input->jenis_kategori;
        $kategori_barang->harga_barang = $input->harga_barang;
        $kategori_barang->berat_barang = $input->berat_barang;
        $informasi=$kategori_barang->save() ? 'Berhasil update data' : 'Gagal update data';
        return redirect('kategori_barang')->with(['informasi'=>$informasi]);         
    }   
    public function hapus($id)
    {
        $kategori_barang = Kategori_Barang::find($id);
        $informasi = $kategori_barang->delete() ? 'Berhasil hapus data' : ' Gagal hapus data';
        return redirect('kategori_barang')->with(['informasi'=>$informasi]);
    }
}
