<?php echo csrf_field(); ?>
{{ csrf_field() }}

<div class="form-group">
	<label class="col-sm-2 control-label">Username</label>
	<div class="col-sm-10">
		{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}	
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Password</label>
	<div class="col-sm-10">
		{{ Form::password('password', array('id' => 'password', "class" => "form-control" ,'placeholder'=>"Password")) }}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Level</label>
	<div class="col-sm-10">
		{!! Form::select('level',['admin'=>'admin','operator'=>'operator'],null,['class'=>'form-control','placeholder'=>"Level"]) !!}	
	</div>
</div>
