@extends('master2')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('biodata_nasabah')}}">
			<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail biodata_nasabah
		</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $biodata_nasabah->nama }}</td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td>:</td>
			<td>{{ $biodata_nasabah->tempat_lahir }}</td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td>{{ $biodata_nasabah->tanggal_lahir }}</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>{{ $biodata_nasabah->jenis_kelamin }}</td>
		</tr>
		<tr>
			<td>No Telepon</td>
			<td>:</td>
			<td>{{ $biodata_nasabah->no_telepon }}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{ $biodata_nasabah->alamat }}</td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td>{{ $biodata_nasabah->pekerjaan }}</td>
		</tr>
		<tr>
			<td>No KTP</td>
			<td>:</td>
			<td>{{ $biodata_nasabah->no_ktp }}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>{{ $biodata_nasabah->email }}</td>
		</tr>
		<tr>
			<td>Status</td>
			<td>:</td>
			<td>{{ $biodata_nasabah->status }}</td>
		</tr>
		<tr>
			<td>Nama Operator</td>
			<td>:</td>
			<td>{{ $biodata_nasabah->operator->nama }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-4">:</td>
			<td class="col-xs-4">{{$biodata_nasabah->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-4">:</td>
			<td class="col-xs-4">{{$biodata_nasabah->updated_at}}</td>
		</tr>
		
	</table>
</div>
@stop