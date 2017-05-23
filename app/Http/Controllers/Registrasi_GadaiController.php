<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\Registrasi_GadaiRequest;
use App\Registrasi_Gadai;
use App\Kelas_Pelayanan;
use App\Biodata_Nasabah;

class Registrasi_GadaiController extends Controller
{
    protected $informasi = 'Gagal melakukan aksi';
    public function awal()
    {
        $semuaRegistrasi_Gadai = Registrasi_Gadai::all();
        return view('registrasi_gadai.awal', compact('semuaRegistrasi_Gadai'));
    }
    public function tambah()
    {      
        $kelas_pelayanan = new Kelas_Pelayanan;
        $biodata_nasabah = new Biodata_Nasabah;
        return view('registrasi_gadai.tambah',compact('kelas_pelayanan','biodata_nasabah'));
    	return $this->simpan();
    }
    public function simpan(Registrasi_GadaiRequest $input)
    {

        $registrasi_gadai = new Registrasi_Gadai;
        $registrasi_gadai->tanggal_gadai=$input->tanggal_gadai;
        $registrasi_gadai->tanggal_pengembalian_gadai=$input->tanggal_pengembalian_gadai;
        $registrasi_gadai->bunga=$input->bunga;
        $registrasi_gadai->nominal=$input->nominal;
        $registrasi_gadai->kelas_pelayanan_id=$input->kelas_pelayanan_id;
        $registrasi_gadai->biodata_nasabah_id=$input->biodata_nasabah_id;
            if($registrasi_gadai->save()) $this->informasi = "Registrasi Gadai berhasil disimpan";
            return redirect('registrasi_gadai')->with(['informasi'=>$this->informasi]);
    }
    public function lihat($id){
        $registrasi_gadai = Registrasi_Gadai::find($id);
        return view('registrasi_gadai.lihat',compact('registrasi_gadai'));
    }
    public function edit($id){
        $registrasi_gadai = Registrasi_Gadai::find($id);
        $kelas_pelayanan = new Kelas_Pelayanan;
        $biodata_nasabah = new Biodata_Nasabah;
        return view('registrasi_gadai.edit',compact('kelas_pelayanan','biodata_nasabah','registrasi_gadai'));
    }
    public function update($id, Registrasi_GadaiRequest $input)
    {
        $registrasi_gadai = Registrasi_Gadai::find($id);
        $registrasi_gadai->fill($input->only('kelas_pelayanan_id','biodata_nasabah_id'));
        if($registrasi_gadai->save()) $this->informasi = "Registrasi Gadai berhasil diperbarui";
        return redirect('registrasi_gadai')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id)
    {
        $registrasi_gadai = Registrasi_Gadai::find($id);
        if($registrasi_gadai->delete()) $this->informasi = "Registrasi Gadai berhasil dihapus";
        return redirect('registrasi_gadai')-> with(['informasi'=>$this->informasi]);
    }
}
