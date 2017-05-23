@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Operator</strong>
		<a href="{{url('operator/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Operator</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama operator</th>
				<th>Username</th>
				<th>Password</th>
				<th>Level</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuaOperator as $operator)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $operator->nama or 'Nama Kosong' }}</td>
				<td>{{ $operator->pengguna->username or 'Username Kosong' }}</td>
				<td>{{ $operator->pengguna->password or 'Password Kosong' }}</td>
				<td>{{ $operator->pengguna->level or 'Level Kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('operator/edit/'.$operator->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('operator/lihat/'.$operator->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('operator/hapus/'.$operator->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop

<!-- 
$operator->nama = $input->nama;
    	$dosen->nip = $input->nip;
    	$dosen->alamat = $input->alamat;
    	$dosen->pengguna_id = $input->pengguna_id; -->