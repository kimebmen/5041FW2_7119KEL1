<?php echo csrf_field(); ?>
{{ csrf_field() }}
<div class="form-group">
	<label class="col-sm-2 control-label" id="jenis_kategori">Jenis Kategori</label>
	<div class="col-sm-10">
		{!! Form::text('jenis_kategori',null,['class'=>'form-control','id'=>'jenis_kategori','placeholder'=>"Jenis Kategori"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="harga_barang">Harga Barang</label>
	<div class="col-sm-10">
		{!! Form::text('harga_barang',null,['class'=>'form-control','id'=>'harga_barang','placeholder'=>"Harga Barang (IDR)"]) !!}	
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="berat_barang">Berat Barang</label>
	<div class="col-sm-10">
		{!! Form::text('berat_barang',null,['class'=>'form-control','id'=>'berat_barang','placeholder'=>"Berat Barang (Kg)"]) !!}	
	</div>
</div>
<!-- <div class="form-group">
	<label class="col-sm-2 control-label">Username</label>
	<div class="col-sm-10">
		{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}	
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Password</label>
	<div class="col-sm-10">
		{!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}	
	</div>
</div> -->

<!-- 
$dosen->nama = $input->nama;
    	$dosen->nip = $input->nip;
    	$dosen->alamat = $input->alamat;
    	$dosen->pengguna_id = $input->pengguna_id; -->