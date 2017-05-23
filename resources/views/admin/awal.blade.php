@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Admin</strong>
		<a href="{{url('admin/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Admin</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Admin</th>
				<th>Username</th>
				<th>Password</th>
				<th>Level</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuaAdmin as $admin)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $admin->nama or 'Nama Kosong' }}</td>
				<td>{{ $admin->pengguna->username or 'Username Kosong' }}</td>
				<td>{{ $admin->pengguna->password or 'Password Kosong' }}</td>
				<td>{{ $admin->pengguna->level or 'Level Kosong' }}</td>
				<td>
						<div class="btn-group" role="group">
							<a href="{{url('admin/edit/'.$admin->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
							<i class="fa fa-pencil"></i></a>
							<a href="{{url('admin/lihat/'.$admin->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
							<i class="fa fa-eye"></i></a>
							<a href="{{url('admin/hapus/'.$admin->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
							<i class="fa fa-remove"></i></a>
						</div>
					</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop
