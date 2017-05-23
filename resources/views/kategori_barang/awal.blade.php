@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data kategori_barang</strong>
		<a href="{{url('kategori_barang/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Kategori Barang</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Jenis Kategori</th>
				<th>Harga Barang (IDR)</th>
				<th>Berat Barang (Kg)</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($data as $kategori_barang)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $kategori_barang->jenis_kategori or 'Jenis Kosong' }}</td>
				<td>{{ $kategori_barang->harga_barang or 'Harga Kosong' }}</td>
				<td>{{ $kategori_barang->berat_barang or 'Barang Kosong' }}</td>
				
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('kategori_barang/edit/'.$kategori_barang->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('kategori_barang/lihat/'.$kategori_barang->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('kategori_barang/hapus/'.$kategori_barang->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop