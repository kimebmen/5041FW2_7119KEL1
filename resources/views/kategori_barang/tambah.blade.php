@extends('master')
@section('container') 
	<div class="panel panel-primary">
		<div class="panel-heading">
			<strong>
				<a href="{{url('kategori_barang')}}">
					<i style="color:white" class="fa text-default fa-chevron-left"></i>
				</a>
				Tambah Data Kategori Barang
			</strong>
		</div>
		{{csrf_field()}}
		{!! Form::open(['url'=>'kategori_barang/simpan','class'=>'form-horizontal']) !!}
		@include('kategori_barang.form')
		<div style="width: 100%; text-align: right; ">
		<button class="btn btn-primary">
			<i class="fa fa-save"></i>Simpan
		</button>
		<button type="reset" class="btn btn-danger">
			<i class="fa fa-undo"></i>Ulangi
		</button>
		</div>
		{!! Form::close() !!}
	</div>
@stop