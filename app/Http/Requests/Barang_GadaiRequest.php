<?php 
namespace App\Http\Requests;

use App\Http\Requests\Request;

class Barang_GadaiRequest extends Request
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		$validasi = [
			'deskripsi'=>'required',
			'registrasi_gadai_id'=>'required',
			'barang_id'=>'required',
		];
		if ($this->is('operator/tambah')) {
			$validasi['password'] = 'required';
		}
		return $validasi;
	}
}