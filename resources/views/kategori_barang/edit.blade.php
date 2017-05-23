@extends('master') 
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong> <a href="{{url('kategori_barang')}}">
		<i class="fa text-default fa-chevron-left"></i>
		</a>Perbarui data kategori barang</strong>
	</div>
	{!! Form::model($barang,['url'=>'kategori_barang/edit/'.$kategori_barang->id,'class'=>'form-horizontal']) !!}
	@include('kategori_barang.form')
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