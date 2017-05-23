@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Data Barang Gadai</strong>
		<a href="{{url('barang_gadai/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>Barang Gadai</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>ID Barang</th>
				<th>Registrasi Gadai</th>
				<th>Deskripsi</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuaBarang_Gadai as $Barang_Gadai)
			<tr>
				<!-- <td>{{ $x++}}</td> -->
				<td>{{ $Barang_Gadai->barang_id or 'ID Barang Kosong' }}</td>
				<td>{{ $Barang_Gadai->registrasi_gadai_id or 'Registrasi Barang Gadai Kosong' }}</td>
				<td>{{ $Barang_Gadai->deskripsi or 'Deskripsi Kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('barang_gadai/edit/'.$barang_gadai->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('barang_gadai/lihat/'.$barang_gadai->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('barang_gadai/hapus/'.$barang_gadai->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop
