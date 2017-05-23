<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Biodata_Nasabah;
use App\Http\Requests;
use App\Http\Requests\Biodata_NasabahRequest;
use App\Registrasi_Gadai;
use App\Operator;

class Biodata_NasabahController extends Controller
{
    // protected $guarded = ['id'];
    protected $informasi = 'Gagal melakukan aksi';
    public function awal()
    {
        $semuaBiodata_Nasabah = Biodata_Nasabah::all();
        return view('biodata_nasabah.awal', ['semuaBiodata_Nasabah'=>Biodata_Nasabah::all()]);
            // compact('semuaBiodata_Nasabah'));
     }

    public function tambah()
    {      
        $operator = new Operator;
        $biodata_nasabah = new Biodata_Nasabah;
        return view('biodata_nasabah.tambah',compact('biodata_nasabah','operator'));
    	return $this->simpan();
    }

    public function simpan(Biodata_NasabahRequest $input)
    {
        $biodata_nasabah = new Biodata_Nasabah;
        $biodata_nasabah->nama=$input->nama;
        $biodata_nasabah->tempat_lahir=$input->tempat_lahir;
        $biodata_nasabah->tanggal_lahir=$input->tanggal_lahir;
        $biodata_nasabah->jenis_kelamin=$input->jenis_kelamin;
        $biodata_nasabah->no_telepon=$input->no_telepon;
        $biodata_nasabah->alamat=$input->alamat;
        $biodata_nasabah->pekerjaan=$input->pekerjaan;
        $biodata_nasabah->no_ktp=$input->no_ktp;
        $biodata_nasabah->email=$input->email;
        $biodata_nasabah->status=$input->status;
        $biodata_nasabah->operator_id=$input->operator_id;
            if($biodata_nasabah->save()) $this->informasi = "Biodata Nasabah berhasil disimpan";
            return redirect('biodata_nasabah')->with(['informasi'=>$this->informasi]);
 
    }
    public function lihat($id){
        $biodata_nasabah = Biodata_Nasabah::find($id);
        return view('biodata_nasabah.lihat')->with(array('biodata_nasabah'=>$biodata_nasabah));
            // compact('Biodata_Nasabah'));
    }
    public function edit($id){
        $biodata_nasabah = Biodata_Nasabah::find($id);
        $operator = new Operator;
        return view('biodata_nasabah.edit',compact('operator','biodata_nasabah'));
    }
    public function update($id, Biodata_NasabahRequest $input)
    {
        $biodata_nasabah = Biodata_Nasabah::find($id);
        $biodata_nasabah->fill($input->only('opreator_id'));
        if($biodata_nasabah->save()) $this->informasi = "Biodata Nasabah berhasil diperbarui";
        return redirect('biodata_nasabah')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id)
    {
        $biodata_nasabah = Biodata_Nasabah::find($id);
        $informasi = $biodata_nasabah->delete()? 'Berhasil hapus data' : 'gagal hapus data';
         // $this->informasi = "Biodata Nasabah berhasil dihapus";
        return redirect('biodata_nasabah')-> with(['informasi'=>$this->informasi]);
    }
}
