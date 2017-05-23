<div class="form-group">
	<label class="col-sm-2 control-label">Jenis Barang</label>
	<div class="col-sm-10">
		{!! Form::select('kategori_barang_id',$kategori_barang->listKategori_Barangg(),null,['class'=>'form-control','id'=>'kategori_barang_id','placeholder'=>"Kategori Barang"]) !!}	
	</div>
	</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="deskripsi">Deskripsi</label>
	<div class="col-sm-10">
		{!! Form::textarea('deskripsi',null,['class'=>'form-control','id'=>'deskripsi','placeholder'=>"Deskripsi"]) !!}	
	</div>
</div>

 