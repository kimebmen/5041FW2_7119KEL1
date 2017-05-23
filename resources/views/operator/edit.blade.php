@extends('master')
@section('container')

<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{ url('operator') }}"><i class="fa text-default fa-cheron-left"></i></a> Perbarui Data Operator</strong>
	</div>
	{!! Form::model($operator,['url'=>'operator/edit/'.$operator->id,'class'=>'form-horizontal']) !!}
	@include('operator.form')
	<div style="width: 100%; text-align: right;">
		<button class="btn btn-info"><i class="fa fa-save"></i>Perbaharui</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	{!! Form::close() !!}
</div>
@stop
<!-- 
$operator->nama = $input->nama;
    	$dosen->nip = $input->nip;
    	$dosen->alamat = $input->alamat;
    	$dosen->pengguna_id = $input->pengguna_id; -->