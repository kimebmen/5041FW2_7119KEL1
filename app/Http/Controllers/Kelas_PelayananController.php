<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kelas_Pelayanan;

class Kelas_PelayananController extends Controller
{
    public function awal()
    {
        return view ('kelas_pelayanan.awal', ['data'=>Kelas_Pelayanan::all()]) ;
    }

    public function tambah()
    {
        return view('kelas_pelayanan.tambah');
    }

    public function simpan(Request $input)
    {
        $this->validate($input,[
                'jenis_pelayanan'=>'required']) ;
        
        $kelas_pelayanan = new Kelas_Pelayanan;
        $kelas_pelayanan->jenis_pelayanan = $input->jenis_pelayanan;
        $informasi = $kelas_pelayanan->save() ? 'Berhasil simpan data':'Gagal simpan data';
        return redirect('kelas_pelayanan')->with(['informasi'=>$informasi]);
    }

    public function edit($id) 
    {
        $kelas_pelayanan = Kelas_Pelayanan::find($id);
        return view('kelas_pelayanan.edit')->with(array('kelas_pelayanan'=>$kelas_pelayanan));
    }
    public function lihat($id) 
    {
        $kelas_pelayanan = Kelas_Pelayanan::find($id);
        return view('kelas_pelayanan.lihat')->with(array('kelas_pelayanan'=>$kelas_pelayanan));
    }

    public function update($id, Request $input)
    {
        $kelas_pelayanan = Kelas_Pelayanan::find($id);
        $kelas_pelayanan -> jenis_pelayanan = $input->jenis_pelayanan;
        $informasi=$kelas_pelayanan->save() ? 'Berhasil update data' : 'Gagal update data';
        return redirect('kelas_pelayanan')->with(['informasi'=>$informasi]);         
    }
    public function hapus($id)
    {
        $kelas_pelayanan = Kelas_Pelayanan::find($id);
        $informasi = $kelas_pelayanan->delete() ? 'Berhasil hapus data' : ' Gagal hapus data';
        return redirect('kelas_pelayanan')->with(['informasi'=>$informasi]);
    }

}
