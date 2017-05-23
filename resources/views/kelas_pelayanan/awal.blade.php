@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Kelas Pelayanan</strong>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Jenis Pelayanan</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($data as $kelas_pelayanan)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $kelas_pelayanan->jenis_pelayanan or 'Jenis Pelayanan Kosong' }}</td>
				
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop