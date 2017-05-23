<?php echo csrf_field(); ?>
{{ csrf_field() }}
<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Tanggal Gadai</label>
	<div class="col-sm-10">
		{!! Form::date('tanggal_gadai',null,['class'=>'form-control','id'=>'tanggal_gadai','placeholder'=>"Tanggal Gadai"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="nip">Tanggal Pengembalian</label>
	<div class="col-sm-10">
		{!! Form::date('tanggal_pengembalian_gadai',null,['class'=>'form-control','id'=>'tanggal_pengembalian_gadai','placeholder'=>"Tanggal Pengembalian"]) !!}	
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="alamat">Bunga</label>
	<div class="col-sm-10">
		{!! Form::text('bunga',null,['class'=>'form-control','id'=>'bunga','placeholder'=>"Bunga"]) !!}	
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="alamat">Nominal</label>
	<div class="col-sm-10">
		{!! Form::text('nominal',null,['class'=>'form-control','id'=>'nominal','placeholder'=>"Nominal"]) !!}	
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="alamat">Kelas Pelayanan</label>
	<div class="col-sm-10">
		{!! Form::select('kelas_pelayanan_id',$kelas_pelayanan->listKelasPelayanan(),null,['class'=>'form-control','id'=>'kelas_pelayanan_id','placeholder'=>"Jenis Pelayanan"]) !!}	
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="alamat">Biodata Nasabah</label>
	<div class="col-sm-10">
		{!! Form::select('biodata_nasabah_id',$biodata_nasabah->listBiodataNasabah(),null,['class'=>'form-control','id'=>'biodata_nasabah_id','placeholder'=>"Nama Nasabah"]) !!}	
	</div>
</div>
