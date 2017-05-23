@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('kelas_pelayanan')}}">
			<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail kategori barang
		</strong>
	</div>
	<table class="table">
		<tr>
			<td>Jenis Pelayanan</td>
			<td>:</td>
			<td>{{ $kelas_pelayanan->jenis_pelayanan }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-4">:</td>
			<td class="col-xs-4">{{$kelas_pelayanan->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-4">:</td>
			<td class="col-xs-4">{{$kelas_pelayanan->updated_at}}</td>
		</tr>
		
	</table>
</div>
@stop