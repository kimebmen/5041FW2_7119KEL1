@extends('master2')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('registrasi_gadai')}}">
			<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail registrasi gadai
		</strong>
	</div>
	<table class="table">
		<tr>
			<td>Tanggal Gadai</td>
			<td>:</td>
			<td>{{ $registrasi_gadai->tanggal_gadai }}</td>
		</tr>
		<tr>
			<td>Tanggal Pengembalian</td>
			<td>:</td>
			<td>{{ $registrasi_gadai->tanggal_pengembalian_gadai }}</td>
		</tr>
		<tr>
			<td>Bunga</td>
			<td>:</td>
			<td>{{ $registrasi_gadai->bunga }}</td>
		</tr>

		<tr>
			<td>Nominal</td>
			<td>:</td>
			<td>{{ $registrasi_gadai->nominal }}</td>
		</tr>
		<tr>
			<td>Kelas Pelayanan</td>
			<td>:</td>
			<td>{{ $registrasi_gadai->kelas_pelayanan_id }}</td>
		</tr>
		<tr>
			<td>Biodata Nasabah</td>
			<td>:</td>
			<td>{{ $registrasi_gadai->biodata_nasabah_id }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-4">:</td>
			<td class="col-xs-4">{{$registrasi_gadai->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-4">:</td>
			<td class="col-xs-4">{{$registrasi_gadai->updated_at}}</td>
		</tr>
		
	</table>
</div>
@stop