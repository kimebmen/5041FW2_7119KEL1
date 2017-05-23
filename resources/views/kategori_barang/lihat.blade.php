@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('kategori_barang')}}">
			<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail kategori barang
		</strong>
	</div>
	<table class="table">
		<tr>
			<td>Jenis Kategori</td>
			<td>:</td>
			<td>{{ $kategori_barang->jenis_kategori }}</td>
		</tr>
		<tr>
			<td>Harga Barang</td>
			<td>:</td>
			<td>{{ $kategori_barang->harga_barang }}</td>
		</tr>
		<tr>
			<td>Berat Barang</td>
			<td>:</td>
			<td>{{ $kategori_barang->berat_barang }}</td>
		</tr>

	
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-4">:</td>
			<td class="col-xs-4">{{$kategori_barang->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-4">:</td>
			<td class="col-xs-4">{{$kategori_barang->updated_at}}</td>
		</tr>
		
	</table>
</div>
@stop