@extends('master2')
@section('container')
<!-- Section Intro Slider
================================================== -->
<div id="carousel-example-generic" class="carousel intro slide">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>
	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<!-- First slide -->
		<div class="item active" style="background-image:url(https://s-media-cache-ak0.pinimg.com/originals/d2/c6/41/d2c6410e5041dee3d36748ac1c32f6ea.jpg)">
			<div class="carousel-caption">
				<h2 data-animation="animated bounceInDown">
				Pegadaian FKTI </h2>
				<h1 data-animation="animated bounceInUp">
				Mengatasi Masalah Tanpa Masalah </h1>
				
			</div>
		</div>
		<!-- /.item -->
		<!-- Second slide -->
		<div class="item" style="background-image:url(http://www.cutdekayi.com/wp-content/uploads/2016/06/cutdekayi-4.jpg)">
			<div class="carousel-caption">
				<h2 data-animation="animated zoomInLeft">
				Pegadaian FKTI </h2>
				<h1 data-animation="animated zoomInRight">
				Mengatasi Masalah Tanpa Masalah </h1>
				
			</div>
		</div>
		<!-- /.item -->
		<!-- Third slide -->
		<div class="item" style="background-image:url(http://www.pegadaiansyariah.co.id/applications/upload/business/2016-03/pegadaiansyariah/albums/slider/promotiontools-06-1.jpg)">
			<div class="carousel-caption">
				<h2 data-animation="animated bounceInLeft">
				PEGADAIAN FKTI</h2>
				<h1 data-animation="animated bounceInRight">
				Mengatasi Masalah Keuangan Anda</h1>
				
			</div>
		</div>
		<!-- /.item -->
	</div>
	<!-- /.carousel-inner -->
	<!-- Controls (currently displayed none from style.css)-->
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
	</a>
</div>
@stop