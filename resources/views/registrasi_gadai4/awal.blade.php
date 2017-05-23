@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Barang</strong>
		<a href="{{url('barang/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Barang</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Jenis Barang</th>
				<th>Harga Barang</th>
				<th>Berat Barang</th>
				<th>Deskripsi</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuaBarang as $barang)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $barang->kategori_barang->jenis_kategori or 'Jenis Kosong' }}</td>
				<td>{{ $barang->kategori_barang->harga_barang or 'Harga Kosong' }}</td>
				<td>{{ $barang->kategori_barang->berat_barang or 'Barang Kosong' }}</td>
				<td>{{ $barang->deskripsi or 'Deskripsi' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('barang/edit/'.$barang->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('barang/lihat/'.$barang->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('barang/hapus/'.$barang->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop