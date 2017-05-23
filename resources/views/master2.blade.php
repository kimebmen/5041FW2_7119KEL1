<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>@yield('page_title','Halaman Awal Operator') | Pegadaian</title>
	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
	<!-- Custom Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Mrs+Sheppards%7CDosis:300,400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800;' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}" type="text/css">
	<!-- Plugin CSS -->
	<link rel="stylesheet" href="{{asset('css/animate.min.css')}}" type="text/css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style type="text/css">
	body{
		padding-top: 85px;
		padding-bottom: 70px;
	}
	.starter-template{
		padding: 40px 15px;
		text-align: center;
	}
	.form-horizontal{
		padding: 15px 10px;
	}
	#mainNavv{
		padding: 15px;
	}
	#hoax{
		padding: 0px;
	}

            .content {
            	margin-top: 80px;
                text-align: center;
                /*display: inline-block;*/
            }

            .title {
                font-size: 40px;
            }
	footer{
		padding-top: 15px;
		text-align: right;
	}
	</style>
</head>
<body id="page-top">
		<nav id="mainNavv" class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a id="hoax" class="navbar-brand page-scroll" href="{{url('home2')}}"><img src="{{asset('pic/logo.png')}}" alt="logolayana"></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
				
					<li class="dropdown active">
						<a class="page-scroll" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Barang <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li><a href="{{url('barang')}}">Data Barang</a></li>
						</ul>
					</li>
					<li class="dropdown active">
						<a class="page-scroll" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registrasi Gadai<span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li><a href="{{url('registrasi_gadai')}}">Data Registrasi Gadai</a></li>
						</ul>
					</li>

					<li class="dropdown active">
						<a class="page-scroll" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Biodata Nasabah <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li><a href="{{ url('biodata_nasabah') }}">Data Biodata Nasabah</a></li>
						</ul>
							<li><a href="{{ url('logout')}}">Logout</a></li>
					</li>
				
				</ul>
				</div><!--/.nav collapse-->
			</div>
		</nav>

		<div class="clearfix"></div>
		<div class="container">
			@if(Session::has('informasi'))
				<div class="alert alert-info">
					<strong>Informasi :</strong>
					{{Session::get('informasi')}}
				</div>
			@endif
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

			@yield('container')
			</div>

<!--			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1 text-center">
						<h2 class="section-heading">WHAT WE STAND FOR<br/>& OUR <b>PRINCIPLES</b></h2>
						<hr>
						<p>
				 			Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculusmus. Nulla dui. Fusce feugiat. Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus.
						</p>			
					</div>
				</div>
			</div>
-->


			<section class="bg-dark">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h1 class="bottombrand wow flipInX">Menggadai Tanpa di Gadai</h1>
							<p>
							&copy; 2017 FKTI_C15
							</p>
						</div>
					</div>
				</div>
			</section>

		<!-- jQuery -->
		<script type="text/javascript" src="{{asset('component/jquery/dist/jquery.js') }}"></script>
		<script type="text/javascript" src="{{asset('component/jquery/dist/parallax.js') }}"></script>
		<script type="text/javascript" src="{{asset('component/jquery/dist/contact.js') }}"></script>
		<script type="text/javascript" src="{{asset('component/jquery/dist/countto.js') }}"></script>
		<script type="text/javascript" src="{{asset('component/jquery/dist/jquery.easing.min.js') }}"></script>
		<script type="text/javascript" src="{{asset('component/jquery/dist/wow.min.js') }}"></script>
		<script type="text/javascript" src="{{asset('component/jquery/dist/common.js') }}"></script>

		<script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js') }}"></script>
		<script type="javascript">
		$(function(){
			$('[data-toggle="tooltip"]').tooltip()
		});
		</script>
</body>
</html>