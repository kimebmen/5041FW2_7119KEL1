<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\Barang_GadaiRequest;
use App\Barang_Gadai;
use App\Registrasi_Gadai;
use App\Barang;

class Barang_GadaiController extends Controller
{
    protected $guarded = ['id'];
    protected $informasi = 'Gagal melakukan aksi';
    public function awal()
    {
        $semuaBarang_Gadai = Barang_Gadai::all();
        return view('barang_gadai.awal', compact('semuaBarang_Gadai'));
    }
    public function tambah()
    {
        $registrasi_gadai = new Registrasi_Gadai;
        $barang = new Barang;
        return view('barang_gadai.tambah',compact('barang','registrasi_gadai'));
    }
    public function simpan(Barang_GadaiRequest $input)
    {
    	$barang_gadai = new Barang_Gadai($input->only('barang_id','registrasi_gadai_id'));
            if($barang_gadai->save()) $this->informasi = "Barang Gadai berhasil disimpan";
            return redirect('barang_gadai')->with(['informasi'=>$this->informasi]);
    }
    public function lihat($id){
        $barang_gadai = Barang_Gadai::find($id);
        return view('barang_gadai.lihat')->with(array('barang_gadai'=>$barang_gadai));
    }
    public function edit($id){
        $barang_gadai = Barang_Gadai::find($id);
        $registrasi_gadai = new Registrasi_Gadai;
        $barang = new Barang;
        $dosen_matakuliah = new Dosen_Matakuliah;
        return view('barang_gadai.edit',compact('barang','registrasi_gadai','barang_gadai'));
    }
    public function update($id,Barang_GadaiRequest $input)
    {
        $barang_gadai = Barang_Gadai::find($id);
        $barang_gadai->fill($input->only('barang_id','registrasi_gadai_id'));
        if($barang_gadai->save()) $this->informasi = "JBarang Gadai berhasil diperbaharui";
        return redirect('barang_gadai')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id)
    {
        $barang_gadai = Barang_Gadai::find($id);
        if($barang_gadai->delete()) $this->informasi = "Barang Gadai berhasil dihapus";
        return redirect('barang_gadai')-> with(['informasi'=>$this->informasi]);
    }


}
