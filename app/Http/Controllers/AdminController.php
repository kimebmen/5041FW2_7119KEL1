<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AdminRequest;
use App\Admin;
use App\Pengguna;

class AdminController extends Controller
{
    protected $informasi = 'Gagal melakukan aksi'; //
    public function awal()
    {
       $semuaAdmin = Admin::all();//
        return view('admin.awal', compact('semuaAdmin'));
    }

    public function tambah()
    {
        
        $pengguna = new Pengguna;
        return view('admin.tambah',compact('pengguna','admin'));
        return $this->simpan();

    }

    

    public function simpan(AdminRequest $input)
    {
        $pengguna = new Pengguna($input->only('username','password','level'));
            if ($pengguna->save()) {
                $admin = new admin;
                $admin->nama = $input->nama;
                if($pengguna->admin()->save($admin)) 
                    $this->informasi='Berhasil simpan data';
            }        
        return redirect ('admin')->with(['informasi'=>$this->informasi]);
    }


    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('admin.edit')-> with(array('admin'=>$admin));
    }

    public function lihat($id)
    {
        $admin = Admin::find($id);
        return view('admin.lihat')->with(array('admin'=>$admin));
    }

    public function update($id, AdminRequest $input)
    {
        $admin = Admin::find($id);
        $admin->nama = $input->nama;
        $admin->save();
        if(!is_null($input->username)){
            $pengguna = $admin->pengguna->fill($input->only('username'));
                if(!empty($input->password)) $pengguna->password = $input->password;
                if($pengguna->save()) $this->informasi = 'Berhasil simpan data';
        }
        else{
            $this->informasi = 'Berhasil simpan data';
        }
        return redirect('admin') -> with (['informasi'=>$this->informasi]);
        
    }
    public function hapus($id)
    {
        $admin = Admin::find($id);
        if($admin->pengguna()->delete()){
            if($admin->delete()) $this->informasi = 'Berhasil hapus data';
        }
        return redirect('admin')-> with(['informasi'=>$this->informasi]);
    }
}
