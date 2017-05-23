@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data biodata_nasabah</strong>
		<a href="{{url('biodata_nasabah/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Biodata Nasabah</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Jenis Kelamin</th>
				<th>No Telepon</th>
				<th>Alamat</th>
				<th>Pekerjaan</th>
				<th>No KTP</th>
				<th>Email</th>
				<th>Status</th>
				<th>Nama Operator</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuaBiodata_Nasabah as $biodata_nasabah)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $biodata_nasabah->nama or 'Nama Kosong' }}</td>
				<td>{{ $biodata_nasabah->tempat_lahir or 'Tempat Lahir Kosong' }}</td>
				<td>{{ $biodata_nasabah->tanggal_lahir or 'Tanggal Lahir Kosong' }}</td>
				<td>{{ $biodata_nasabah->jenis_kelamin or 'Jenis Kelamin Kosong' }}</td>
				<td>{{ $biodata_nasabah->no_telepon or 'No Telepon Kosong' }}</td>
				<td>{{ $biodata_nasabah->alamat or 'Alamat Kosong' }}</td>
				<td>{{ $biodata_nasabah->pekerjaan or 'Pekerjaan Kosong' }}</td>
				<td>{{ $biodata_nasabah->no_ktp or 'No KTP Kosong' }}</td>
				<td>{{ $biodata_nasabah->email or 'Email Kosong' }}</td>
				<td>{{ $biodata_nasabah->status or 'Status Kosong' }}</td>
				<td>{{ $biodata_nasabah->operator->nama or 'Nama Operator Kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('biodata_nasabah/edit/'.$biodata_nasabah->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('biodata_nasabah/lihat/'.$biodata_nasabah->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('biodata_nasabah/hapus/'.$biodata_nasabah->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop