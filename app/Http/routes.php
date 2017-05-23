<?php
use Illuminate\Http\Request;
// use Illuminate\Http\Middleware\AuthentifikasiUser;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/login','SesiController@form');
Route::post('/login','SesiController@validasi');
Route::get('/logout','SesiController@logout');
Route::get('/','SesiController@landing');
Route::get('landing','SesiController@landing');



Route::group(['middleware'=>'AuthentifikasiUser'],function ()
{
	Route::get('/yaw','SesiController@index2');
	Route::get('home2','PenggunaController@home2');
	
	Route::get('biodata_nasabah','Biodata_NasabahController@awal');
	Route::get('biodata_nasabah/tambah','Biodata_NasabahController@tambah');
	Route::post('biodata_nasabah/simpan','Biodata_NasabahController@simpan');
	Route::get('biodata_nasabah/edit/{biodata_nasabah}','Biodata_NasabahController@edit');
	Route::post('biodata_nasabah/edit/{biodata_nasabah}','Biodata_NasabahController@update');
	Route::get('biodata_nasabah/hapus/{biodata_nasabah}','Biodata_NasabahController@hapus');
	Route::get('biodata_nasabah/lihat/{biodata_nasabah}','Biodata_NasabahController@lihat');

	Route::get('barang','BarangController@awal');
	Route::get('barang/tambah','BarangController@tambah');
	Route::post('barang/simpan','BarangController@simpan');
	Route::get('barang/edit/{barang}','BarangController@edit');
	Route::post('barang/edit/{barang}','BarangController@update');
	Route::get('barang/hapus/{barang}','BarangController@hapus');
	Route::get('barang/lihat/{barang}','BarangController@lihat');

	Route::get('registrasi_gadai','Registrasi_GadaiController@awal');
	Route::get('registrasi_gadai/tambah','registrasi_gadaiController@tambah');
	Route::post('registrasi_gadai/simpan','Registrasi_GadaiController@simpan');
	Route::get('registrasi_gadai/edit/{registrasi_gadai}','Registrasi_GadaiController@edit');
	Route::post('registrasi_gadai/edit/{registrasi_gadai}','Registrasi_GadaiController@update');
	Route::get('registrasi_gadai/hapus/{registrasi_gadai}','Registrasi_GadaiController@hapus');
	Route::get('registrasi_gadai/lihat/{registrasi_gadai}','Registrasi_GadaiController@lihat');

	// Route::get('barang_gadai','Barang_GadaiController@awal');
	// Route::get('barang_gadai/tambah','Barang_GadaiController@tambah');
	// Route::post('barang_gadai/simpan','Barang_GadaiController@simpan');
	// Route::get('barang_gadai/edit/{barang_gadai}','Barang_GadaiController@edit');
	// Route::post('barang_gadai/edit/{barang_gadai}','Barang_GadaiController@update');
	// Route::get('barang_gadai/hapus/{barang_gadai}','Barang_GadaiController@hapus');
	// Route::get('barang_gadai/lihat/{barang_gadai}','Barang_GadaiController@lihat');
	
	Route::get('ujiHas','RelationshipRebornController@ujiHas');
	Route::get('ujiDoesntHave','RelationshipRebornController@ujiDoesntHave');
	
});
Route::group(['middleware'=>'AuthentifikasiAdmin'],function ()
{
	Route::get('/yow','SesiController@index');
	Route::get('home','PenggunaController@home');
	Route::get('pengguna','PenggunaController@awal');
	Route::get('pengguna/tambah','PenggunaController@tambah');
	Route::post('pengguna/simpan','PenggunaController@simpan');
	Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
	Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
	Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');
	Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat');

	Route::get('admin','AdminController@awal');
	Route::get('admin/tambah','AdminController@tambah');
	Route::post('admin/simpan','AdminController@simpan');
	Route::get('admin/edit/{admin}','AdminController@edit');
	Route::post('admin/edit/{admin}','AdminController@update');
	Route::get('admin/hapus/{admin}','AdminController@hapus');
	Route::get('admin/lihat/{admin}','AdminController@lihat');

	Route::get('operator','OperatorController@awal');
	Route::get('operator/tambah','OperatorController@tambah');
	Route::post('operator/simpan','OperatorController@simpan');
	Route::get('operator/edit/{operator}','OperatorController@edit');
	Route::post('operator/edit/{operator}','OperatorController@update');
	Route::get('operator/hapus/{operator}','OperatorController@hapus');
	Route::get('operator/lihat/{operator}','OperatorController@lihat');

	Route::get('kategori_barang','Kategori_BarangController@awal');
	Route::get('kategori_barang/tambah','Kategori_BarangController@tambah');
	Route::post('kategori_barang/simpan','Kategori_BarangController@simpan');
	Route::get('kategori_barang/edit/{kategori_barang}','Kategori_BarangController@edit');
	Route::post('kategori_barang/edit/{kategori_barang}','Kategori_BarangController@update');
	Route::get('kategori_barang/hapus/{kategori_barang}','Kategori_BarangController@hapus');
	Route::get('kategori_barang/lihat/{kategori_barang}','Kategori_BarangController@lihat');

	Route::get('kelas_pelayanan','Kelas_PelayananController@awal');
	Route::get('kelas_pelayanan/tambah','Kelas_PelayananController@tambah');
	Route::post('kelas_pelayanan/simpan','Kelas_PelayananController@simpan');
	Route::get('kelas_pelayanan/edit/{kelas_pelayanan}','Kelas_PelayananController@edit');
	Route::post('kelas_pelayanan/edit/{kelas_pelayanan}','Kelas_PelayananController@update');
	Route::get('kelas_pelayanan/hapus/{kelas_pelayanan}','Kelas_PelayananController@hapus');
	Route::get('kelas_pelayanan/lihat/{kelas_pelayanan}','Kelas_PelayananController@lihat');

});










// Route::get('/', function () {
//     return view('posttest1');
// });
// Route::get('/', function () 
// {
//     return view('master');
// }); 

// Route::get('/', function () 
// {
//     return \App\Dosen_Matakuliah::whereHas('dosen',function($query)
//     {
//     	$query->where('nama','like','%k%');
//     })->with('dosen')->groupBy('dosen_id')->get();
// }); 

// Route::get('/', function () 
// {
//     return \App\Dosen_Matakuliah::whereHas('dosen',function($query)
//     {
//     	$query->where('nama','like','%k%');
//     })
//     ->orWhereHas('matakuliah',function ($kueri)
//     {
//     	$kueri->where('title','like','%a%');
//     })
//     ->with('dosen')
//     ->groupBy('dosen_id')
//     ->get();
// }); 

// Route::get('/public', function () {
//     return ("Nama Saya : R.H. Kimebmen Simbolon");
// });
// Route::get('pengguna/{pengguna}', function ($pengguna) {
//     return ("Hallo World dari pengguna $pengguna");
// });
// Route::get('/',function (Illuminate\Http\Request $request)
// {
//     echo "ini adalah request method dari method get ". $request->nama;
// });


// Route::get('/',function ()
// {
//     echo Form::open(['url'=>'/']).
//          Form::label('nama').
//          Form::text('nama',null).
//          Form::submit('kirim').
//          Form::close();
// });
// Route::post('/',function (Request $request)
// {
//     echo "Hasil dari form input tadi nama : ".$request->nama;
// });


