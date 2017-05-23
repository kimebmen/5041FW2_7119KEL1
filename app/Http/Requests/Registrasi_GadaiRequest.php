<?php 
namespace App\Http\Requests;

use App\Http\Requests\Request;

class Registrasi_GadaiRequest extends Request
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		$validasi = [
			'tanggal_gadai'=>'required',
			'tanggal_pengembalian_gadai'=>'required',
			'bunga'=>'required',
			'nominal'=>'required',
			'kelas_pelayanan_id'=>'required',
			// 'biodata_nasabah'=>'required',
		];
		if ($this->is('operator/tambah')) {
			$validasi['password'] = 'required';
		}
		return $validasi;
	}
}