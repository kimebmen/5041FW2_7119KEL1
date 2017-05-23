<?php 
namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdminRequest extends Request
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		$validasi = [
			'nama'=>'required',
			
		];
		if ($this->is('operator/tambah')) {
			$validasi['password'] = 'required';
		}
		return $validasi;
	}
}