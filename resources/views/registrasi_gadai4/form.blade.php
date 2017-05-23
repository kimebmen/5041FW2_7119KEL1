<div class="form-group">
	<label class="col-sm-2 control-label">Jenis Barang</label>
	<div class="col-sm-10">
		{!! Form::select('kategori_barang_id',$kategori_barang->listKategoriBarang(),null,['class'=>'form-control','id'=>'kategori_barang_id','placeholder'=>"Kategori Barang"]) !!}	
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Deskripsi</label>
	<div class="col-sm-10">
		{!! Form::textarea('deskripsi',null,['class'=>'form-control','placeholder'=>"Deskripsi"]) !!}
	</div>
</div>

 