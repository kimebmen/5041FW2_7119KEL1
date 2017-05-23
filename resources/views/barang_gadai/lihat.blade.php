@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('Barang_Gadai') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Barang GadaiBarang_Gadai</strong>		
	</div>
	<table class="table">
		<tr>
			<td>ID Barang</td>
			<td>:</td>
			<td>{{ $Barang_Gadai->barang_id }}</td>
		</tr>

		<tr>
			<td>Registrasi Gadai</td>
			<td>:</td>
			<td>{{ $Barang_Gadai->registrasi_gadai_id }}</td>
		</tr>

		<tr>
			<td>Deskripsi</td>
			<td>:</td>
			<td>{{ $Barang_Gadai->deskripsi }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$Barang_Gadai->created_at}}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$Barang_Gadai->updated_at}}</td>
		</tr>
	</table>
</div>
@stop