<?php echo csrf_field(); ?>
{{ csrf_field() }}
<div class="form-group">
	<label class="col-sm-2 control-label">Nama Admin</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholder'=>"Nama"]) !!}	
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Jenis Barang</label>
	<div class="col-sm-10">
		{!! Form::select('pengguna_id',$pengguna->lists('username'),null,['class'=>'form-control','id'=>'pengguna_id','placeholder'=>"Nama Pengguna"]) !!}	
	</div>





