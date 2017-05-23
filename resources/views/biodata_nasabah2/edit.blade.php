@extends('master') 
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong> <a href="{{url('biodata_nasabah')}}">
		<i class="fa text-default fa-chevron-left"></i>
		</a>Perbarui data biodata_nasabah</strong>
	</div>
	{!! Form::model($biodata_nasabah,['url'=>'biodata_nasabah/edit/'.$biodata_nasabah->id,'class'=>'form-horizontal']) !!}
	@include('biodata_nasabah.form')
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