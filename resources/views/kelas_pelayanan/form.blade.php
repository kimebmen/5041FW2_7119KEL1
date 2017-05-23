<?php echo csrf_field(); ?>
{{ csrf_field() }}
<div class="form-group">
	<label class="col-sm-2 control-label" id="kelas_pelayanan">Kelas Pelayanan</label>
	<div class="col-sm-10">
		{!! Form::select('jenis_pelayanan',['VIP'=>'VIP','EKONOMI'=>'EKONOMI'],null,['class'=>'form-control','placeholder'=>"Kelas Pelayanan"]) !!}	
	</div>
</div>


