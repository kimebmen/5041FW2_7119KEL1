<?php 
namespace App\Http\Requests;

use App\Http\Requests\Request;

class Biodata_NasabahRequest extends Request
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		$validasi = [
			'nama'=>'required',
			'tempat_lahir'=>'required',
			'tanggal_lahir'=>'required',
			'jenis_kelamin'=>'required',
			'no_telepon'=>'required',
			'alamat'=>'required',
			'pekerjaan'=>'required',
			'no_ktp'=>'required',
			'email'=>'required',
			'status'=>'required',
			'operator_id'=>'required',
		];
		if ($this->is('operator/tambah')) {
			$validasi['password'] = 'required';
		}
		return $validasi;
	}
}