<?php echo csrf_field(); ?>
{{ csrf_field() }}

<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Nama Nasabah</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholder'=>"Nama Nasabah"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="tempat_lahir">Tempat Lahir</label>
	<div class="col-sm-10">
		{!! Form::text('tempat_lahir',null,['class'=>'form-control','id'=>'tempat_lahir','placeholder'=>"tempat_lahir"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="tanggal_lahir">Tanggal Lahir</label>
	<div class="col-sm-10">
		{!! Form::date('tanggal_lahir',null,['class'=>'form-control','id'=>'tanggal_lahir','placeholder'=>"tanggal_lahir"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="jenis_kelamin">Jenis Kelamin</label>
	<div class="col-sm-10">
		{!! Form::select('jenis_kelamin',['Pria'=>'Pria','Wanita'=>'Wanita'],null,['class'=>'form-control','id'=>'jenis_kelamin','placeholder'=>"Jenis Kelamin"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="no_telepon">No Telepon</label>
	<div class="col-sm-10">
		{!! Form::text('no_telepon',null,['class'=>'form-control','id'=>'no_telepon','placeholder'=>"no_telepon"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="alamat">Alamat</label>
	<div class="col-sm-10">
		{!! Form::text('alamat',null,['class'=>'form-control','id'=>'alamat','placeholder'=>"alamat"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="pekerjaan">pekerjaan</label>
	<div class="col-sm-10">
		{!! Form::text('pekerjaan',null,['class'=>'form-control','id'=>'pekerjaan','placeholder'=>"pekerjaan"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="no_ktp">no_ktp</label>
	<div class="col-sm-10">
		{!! Form::text('no_ktp',null,['class'=>'form-control','id'=>'no_ktp','placeholder'=>"no_ktp"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="email">email</label>
	<div class="col-sm-10">
		{!! Form::text('email',null,['class'=>'form-control','id'=>'email','placeholder'=>"email"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="status">status</label>
	<div class="col-sm-10">
		{!! Form::select('status',['Menikah'=>'Menikah','Jomblo'=>'Jomblo','Lainnya'=>'Lainnya'],null,['class'=>'form-control','id'=>'status','placeholder'=>"status"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="operator_id">ID Operator</label>
	<div class="col-sm-10">
		{!! Form::select('operator_id',$operator->listOperator(),null,['class'=>'form-control','id'=>'operator_id','placeholder'=>"ID Operator"]) !!}	
	</div>
</div>



<!-- <div class="form-group">
	<label class="col-sm-2 control-label" id=""></label>
	<div class="col-sm-10">
		{!! Form::text('',null,['class'=>'form-control','id'=>'','placeholder'=>""]) !!}	
	</div>
</div> -->