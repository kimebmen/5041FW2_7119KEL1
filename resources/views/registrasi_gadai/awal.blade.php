@extends('master2')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Registrasi Gadai</strong>
		<a href="{{url('registrasi_gadai/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Registrasi Gadai</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Tanggal Gadai</th>
				<th>Tanggal Pengembalian </th>
				<th>Bunga</th>
				<th>Nominal</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuaRegistrasi_Gadai as $registrasi_gadai)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $registrasi_gadai->tanggal_gadai or 'Tanggal Gadai Kosong' }}</td>
				<td>{{ $registrasi_gadai->tanggal_pengembalian_gadai or 'Tanggal Pengembalian Kosong' }}</td>
				<td>{{ $registrasi_gadai->bunga or 'Bunga Kosong' }}</td>
				<td>{{ $registrasi_gadai->nominal or 'Nominal Kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('registrasi_gadai/edit/'.$registrasi_gadai->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('registrasi_gadai/lihat/'.$registrasi_gadai->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('registrasi_gadai/hapus/'.$registrasi_gadai->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop