@extends('master2')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Biodata Nasabah</strong>
		<a href="{{url('biodata_nasabah/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>Biodata Nasabah</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>ID Operator</th>
				<th>Nama Nasabah</th>
				<th>Jenis Kelamin</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuaBiodata_Nasabah as $biodata_nasabah)
			<tr>
				<!-- <td>{{ $x++}}</td> -->
				<td>{{ $biodata_nasabah->operator_id or 'Nama Kosong' }}</td>
				<td>{{ $biodata_nasabah->nama or 'Nama Kosong' }}</td>
				<td>{{ $biodata_nasabah->jenis_kelamin or 'Jenis Kelamin Kosong' }}</td>
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
