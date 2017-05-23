<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\Biodata_NasabahRequest;
use App\Registrasi_Gadai;
use App\Operator;
use App\Biodata_Nasabah;

class Biodata_NasabahController extends Controller
{
    protected $informasi = 'Gagal melakukan aksi';
    public function awal()
    {
        $semuaBiodata_Nasabah = Biodata_Nasabah::all();
        return view('biodata_nasabah.awal', compact('semuaBiodata_Nasabah'));
    }

    public function tambah()
    {      
        $operator = new Operator;
        return view('biodata_nasabah.tambah',compact('operator','biodata_nasabah'));
     //    $pengguna = new Pengguna;
     //    return view('operator.tambah',compact('pengguna','operator'));
    	// return $this->simpan();
    }

    public function simpan(Biodata_NasabahRequest $input)
    {

        $biodata_nasabah = new Biodata_Nasabah($input->only('operator_id'));
            if($biodata_nasabah->save()) $this->informasi = "Biodata Nasabah berhasil disimpan";
            return redirect('biodata_nasabah')->with(['informasi'=>$this->informasi]);
    }
    public function lihat($id){
        $biodata_nasabah = Biodata_Nasabah::find($id);
        return view('biodata_nasabah.lihat',compact('biodata_nasabah'));
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
        if($biodata_nasabah->delete()) $this->informasi = "Biodata Nasabah berhasil dihapus";
        return redirect('biodata_nasabah')-> with(['informasi'=>$this->informasi]);
    }
}
