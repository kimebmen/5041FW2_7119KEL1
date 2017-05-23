@extends('master2') 
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong> <a href="{{url('registrasi_gadai')}}">
		<i class="fa text-default fa-chevron-left"></i>
		</a>Perbarui data Registrasi Gadai</strong>
	</div>
	{!! Form::model($registrasi_gadai,['url'=>'registrasi_gadai/edit/'.$registrasi_gadai->id,'class'=>'form-horizontal']) !!}
	@include('registrasi_gadai.form')
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