<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\OperatorRequest;
use App\Operator;
use App\Pengguna;

class OperatorController extends Controller
{
	protected $informasi = 'Gagal melakukan aksi'; 	   
	public function awal()
    {   
        $semuaOperator = Operator::all();
        return view('operator.awal', compact('semuaOperator'));
    }

    public function tambah()
    {
        $pengguna = new Pengguna;
        $operator = new Operator;
        return view('operator.tambah',compact('operator','pengguna'));
    }

    public function simpan(OperatorRequest $input)
    {
    	$pengguna = new Pengguna($input->only('username','password'));
        $pengguna->level="operator";
            if ($pengguna->save()) {
                $operator = new Operator;
                $operator->pengguna_id=$pengguna->id;
                $operator->nama = $input->nama;
                if($operator->save()) $this->informasi='Berhasil simpan data';
            }        
        return redirect ('operator')->with(['informasi'=>$this->informasi]);        
    }  

    public function edit($id)
    {
        $operator = Operator::find($id);
        return view('operator.edit')-> with(array('operator'=>$operator));

    }

    public function lihat($id)
    {
        $operator = Operator::find($id);
        return view('operator.lihat')->with(array('operator'=>$operator));
    }

    public function update($id, OperatorRequest $input)
    {
        $operator = Operator::find($id);
        $pengguna = $operator->pengguna;
        $operator->nama = $input->nama;
        $operator->save();
        if(!is_null($input->username)){
            $pengguna = $operator->pengguna->fill($input->only('username'));
                if(!empty($input->password))
                 $pengguna->password = $input->password;
                
                if($pengguna->save())
                 $this->informasi = 'Berhasil simpan data';
                
                }else{
                $this->informasi = 'Berhasil simpan data';
                }
        return redirect('operator') -> with(['informasi'=>$this->informasi]);
    }

    public function hapus($id)
    {
        $operator = Operator::find($id);
        if($operator->pengguna()->delete()){
            if($operator->delete()) $this->informasi = 'Berhasil hapus data';
        }
        return redirect('operator')-> with(['informasi'=>$this->informasi]);
    }  
}
