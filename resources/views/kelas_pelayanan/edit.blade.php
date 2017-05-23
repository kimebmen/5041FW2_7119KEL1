@extends('master') 
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong> <a href="{{url('kelas_pelayanan')}}">
		<i class="fa text-default fa-chevron-left"></i>
		</a>Perbarui data kategori barang</strong>
	</div>
	{!! Form::model($barang,['url'=>'kelas_pelayanan/edit/'.$kelas_pelayanan->id,'class'=>'form-horizontal']) !!}
	@include('kelas_pelayanan.form')
		<div style="width:100%;text-align: right;">
			<button class="btn btn-info">
				<i class="fa fa-save"></i>Perbarui
			</button>
			<button type="reset" class="btn btn-danger">
				<i class="fa fa-undo"></i>ulangi
			</button>
		</div>
		{!! Form::close() !!}
</div>
@stop