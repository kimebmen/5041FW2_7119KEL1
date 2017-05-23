@extends('master2')
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('biodata_nasabah')}}">
		<i class="fa text-default fa-cheron-left"></i>
		</a> Perbarui Data biodata_nasabah</strong>
	</div>
	{!! Form::model($biodata_nasabah,['url'=>'biodata_nasabah/edit/'.$biodata_nasabah->id,'class'=>'form-horizontal']) !!}
	@include('biodata_nasabah.form')
	<div style="width: 100%; text-align: right;">
		<button class="btn btn-info">
			<i class="fa fa-save"></i>Perbaharui
		</button>
		<button type="reset" class="btn btn-danger">
			<i class="fa fa-undo"></i>Ulangi
		</button>
	</div>
	{!! Form::close() !!}
</div>
@stop
