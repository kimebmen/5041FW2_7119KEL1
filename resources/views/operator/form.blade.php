<?php echo csrf_field(); ?>
{{ csrf_field() }}
<div class="form-group">
	<label class="col-sm-2 control-label">Nama Operator</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholder'=>"Nama"]) !!}	
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Username</label>
	<div class="col-sm-10">
		{!! Form::text('username',null,['class'=>'form-control','id'=>'username','placeholder'=>"Username"]) !!}	
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Password</label>
	<div class="col-sm-10">
		{{ Form::password('password', array('id' => 'password', "class" => "form-control" ,'placeholder'=>"Password")) }}
	</div>
</div>





