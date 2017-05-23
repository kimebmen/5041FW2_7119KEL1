<div class="form-group">
	<label class="col-sm-2 control-label">Nama Operator</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholder'=>"Nama"]) !!}	
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Tempat Lahir</label>
	<div class="col-sm-10">
		{!! Form::text('tempat_lahir',null,['class'=>'form-control','placeholder'=>"Tempat Lahir"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Tanggal Lahir</label>
	<div class="col-sm-10">
		{!! Form::text('tanggal_lahir',null,['class'=>'form-control','placeholder'=>"Tanggal Lahir"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Jenis Kelamin</label>
	<div class="col-sm-10">
		{!! Form::text('jenis_kelamin',null,['class'=>'form-control','placeholder'=>"Jenis Kelamin"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">No Telepon</label>
	<div class="col-sm-10">
		{!! Form::text('no_telepon',null,['class'=>'form-control','placeholder'=>"No Telepon"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Alamat</label>
	<div class="col-sm-10">
		{!! Form::text('alamat',null,['class'=>'form-control','placeholder'=>"Alamat"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Pekerjaan</label>
	<div class="col-sm-10">
		{!! Form::text('pekerjaan',null,['class'=>'form-control','placeholder'=>"Pekerjaan"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">No KTP</label>
	<div class="col-sm-10">
		{!! Form::text('no_ktp',null,['class'=>'form-control','placeholder'=>"No KTP"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Email</label>
	<div class="col-sm-10">
		{!! Form::text('email',null,['class'=>'form-control','placeholder'=>"Email"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Status</label>
	<div class="col-sm-10">
		{!! Form::text('status',null,['class'=>'form-control','placeholder'=>"Status"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Jenis Barang</label>
	<div class="col-sm-10">
		{!! Form::select('operator_id',$operator->lists('nama'),null,['class'=>'form-control','id'=>'operator_id','placeholder'=>"Nama Operator"]) !!}	
	</div>



 