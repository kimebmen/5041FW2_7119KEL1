@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('operator') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data Operator</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Nama operator</td>
			<td>:</td>
			<td>{{ $operator->nama }}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>{{ $operator->pengguna->username }}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td>{{ $operator->pengguna->password }}</td>
		</tr>
		<tr>
			<td>Level</td>
			<td>:</td>
			<td>{{ $operator->pengguna->level }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$operator->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$operator->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
<!-- 
$admin->nama = $input->nama;
    	$dosen->nip = $input->nip;
    	$dosen->alamat = $input->alamat;
    	$dosen->pengguna_id = $input->pengguna_id; -->