@extends('master')
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{ url('Barang_Gadai') }}"><i class="fa text-default fa-cheron-left"></i></a> Perbarui Barang Gadai</strong>
	</div>
	{!! Form::model($Barang_Gadai,['url'=>'Barang_Gadai/edit/'.$Barang_Gadai->id,'class'=>'form-horizontal']) !!}
	@include('Barang_Gadai.form')
	<div style="width: 100%; text-align: right;">
		<button class="btn btn-info"><i class="fa fa-save"></i>Perbaharui</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	{!! Form::close() !!}
</div>
@stop

