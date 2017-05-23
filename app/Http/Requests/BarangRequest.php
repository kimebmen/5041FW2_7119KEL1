<?php 
namespace App\Http\Requests;

use App\Http\Requests\Request;

class BarangRequest extends Request
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		$validasi = [
			// 'jenis_barang'=>'required',
			// // 'harga_barang'=>'required',
			// // 'berat_barang'=>'required',
			// 'deskripsi'=>'required',
			
		];
		if ($this->is('operator/tambah')) {
			$validasi['password'] = 'required';
		}
		return $validasi;
	}
}