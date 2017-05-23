<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="materialize is a material design based mutipurpose responsive template">
        <meta name="keywords" content="material design, card style, material template, portfolio, corporate, business, creative, agency">
        <meta name="author" content="trendytheme.net">

        <title>@yield('page_title','Home') | Pegadaian FKTI</title>

        <!--  favicon -->
        <link rel="shortcut icon" href="{{asset('assets/img/ico/favicon.png')}}">
        <!--  apple-touch-icon -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets/img/ico/apple-touch-icon-144-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets/img/ico/apple-touch-icon-114-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets/img/ico/apple-touch-icon-72-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" href="{{asset('assets/img/ico/apple-touch-icon-57-precomposed.png')}}">


        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
        <!-- Material Icons CSS -->
        <link href="{{asset('assets/fonts/iconfont/material-icons.css')}}" rel="stylesheet">
        <!-- FontAwesome CSS -->
        <link href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <!-- magnific-popup -->
        <link href="{{asset('assets/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
        <!-- owl.carousel -->
        <link href="{{asset('assets/owl.carousel/assets/owl.carousel.css')}}" rel="stylesheet">
        <link href="{{asset('assets/owl.carousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
        <!-- flexslider -->
        <link href="{{asset('assets/flexSlider/flexslider.css')}}" rel="stylesheet">
        <!-- materialize -->
        <link href="{{asset('assets/materialize/css/materialize.min.css')}}" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- shortcodes -->
        <link href="{{asset('assets/css/shortcodes/shortcodes.css')}}" rel="stylesheet">
        <!-- Style CSS -->
        <link href="{{asset('style.css')}}" rel="stylesheet">
        <!-- Main Style CSS -->
        <link href="{{asset('style.css')}}" rel="stylesheet">
        <!-- Agency CSS -->
        <link href="{{asset('assets/css/skins/agency.css')}}" rel="stylesheet">


        <!-- RS5.0 Main Stylesheet -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/revolution/css/settings.css')}}">
        <!-- RS5.0 Layers and Navigation Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/revolution/css/layers.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/revolution/css/navigation.css')}}">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body id="top">

  
        <!--header start-->
        <header id="header" class="tt-nav transparent-header">

            <div class="header-sticky light-header ">

                <div class="container">


                    <div id="materialize-menu" class="menuzord">

                        <!--logo start-->
                        <a href="{{url('landing')}}" class="logo-brand">
                            <img class="logo-dark" src="{{asset('assets/img/logo.png')}}" alt=""/>
                            <img class="logo-light" src="{{asset('assets/img/logo-white.png')}}" alt=""/>
                        </a>
                        <!--logo end-->

                        <!--mega menu start-->
                        <ul class="menuzord-menu pull-right light">
                            <li><a href="javascript:void(0)">Home</a>
                            </li>
                            <li><a href="javascript:void(0)">Info</a>
                                <ul class="dropdown">
                                    <li><a href="#info1">Info Pegadaian FKTI</a></li>
                                    <li><a href="#info2">Info Angota</a></li>
                                </ul>
                            <li><a href="{{url('logout')}}">Login</a>
                            </li>
                            </li>

                        </ul>
                        <!--mega menu end-->

                    </div>
                </div>
            </div>

        </header>
        <!--header end-->


        <!-- start revolution slider 5.0 -->
        <section class="rev_slider_wrapper">
         <div class="rev_slider materialize-slider">
          <ul>

            <!-- slide 1 start --> 
            <li data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="https://s-media-cache-ak0.pinimg.com/originals/d2/c6/41/d2c6410e5041dee3d36748ac1c32f6ea.jpg"  data-rotate="0"  data-saveperformance="off" data-description="">

                <!-- MAIN IMAGE -->
                <img src="https://s-media-cache-ak0.pinimg.com/originals/d2/c6/41/d2c6410e5041dee3d36748ac1c32f6ea.jpg"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 -500" data-offsetend="0 500" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->

                <div class="tp-overlay"></div>

                <!-- LAYER NR. 1 -->
                <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                    data-fontsize="['70','70','70','45']"
                    data-lineheight="['70','70','70','50']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power2.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];" 
                    data-mask_out="x:inherit;y:inherit;" 
                    data-start="1000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on" 

                    
                    style="z-index: 5; white-space: nowrap;padding:10px 20px 10px 20px;">Manajemen Pegadaian Barang FKTI
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption rev-subheading white-text tp-resizeme rs-parallaxlevel-0" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['62','62','62','61']" 
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1500" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on" 
                    style="z-index: 6; white-space: nowrap;">Mengatasi Masalah Tanpa Masalah
                </div>
                <div class="tp-caption tp-resizeme rev-btn"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['100','100','100','100']" 
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-style_hover="cursor:default;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1200" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    style="z-index: 7; white-space: nowrap;">
                    <a href="{{url('logout')}}" class="btn btn-lg green waves-effect waves-light">LOGIN</a>
                </div>

                <!-- LAYER NR. 3 -->
                
            </li>
            <!-- slide 1 end -->

            <!-- slide 2 start --> 
            <li data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="http://www.cutdekayi.com/wp-content/uploads/2016/06/cutdekayi-4.jpg"  data-rotate="0"  data-saveperformance="off" data-description="">

                <!-- MAIN IMAGE -->
                <img src="http://www.cutdekayi.com/wp-content/uploads/2016/06/cutdekayi-4.jpg"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 -500" data-offsetend="0 500" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->

                <div class="tp-overlay"></div>

                <!-- LAYER NR. 1 -->
                <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                    data-fontsize="['70','70','70','45']"
                    data-lineheight="['70','70','70','50']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power2.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];" 
                    data-mask_out="x:inherit;y:inherit;" 
                    data-start="1000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on" 

                    
                    style="z-index: 5; white-space: nowrap;padding:10px 20px 10px 20px;">Manajemen Pegadaian Barang FKTI
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption rev-subheading white-text tp-resizeme rs-parallaxlevel-0" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['62','62','62','61']" 
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1500" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on" 

                    
                    style="z-index: 6; white-space: nowrap;">Mengatasi Masalah Tanpa Masalah
                </div>
                <div class="tp-caption tp-resizeme rev-btn"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['100','100','100','100']" 
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-style_hover="cursor:default;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1200" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    style="z-index: 7; white-space: nowrap;">
                    <a href="{{url('logout')}}" class="btn btn-lg green waves-effect waves-light">LOGIN</a>
                </div>

                <!-- LAYER NR. 3 -->
                
            </li>
            <!-- slide 2 end -->

          </ul>             
         </div><!-- end revolution slider -->
        </section><!-- end of slider wrapper -->
        
        <section name="info1" class="section-padding">
            <div class="container">

              <div class="text-center mb-80">
                  <a name="info1"><h2 class="section-title text-uppercase">Info Pegadaian FKTI</h2></a>
                  <p class="section-sub">Pegadaian Barang FKTI merupakan layanan sosial yang dapat digunakan oleh siapa saja. Pegadaian Barang FKTI dihadirkan untuk mengatasi masalah-masalah yang ada dengan berbagai macam kelebihannya yaitu :</p>
              </div>

              <div class="row no-gutter">
                  <div class="col-md-3 col-sm-6">
                      <div class="featured-box dark-bg lighten-2 text-center z-depth-1">
                        <div class="featured-wrapper">
                          <div class="intro-header">
                              <i class="material-icons white-text">&#xE53B;</i>
                              <h2 class="white-text">Mudah</h2>
                          </div>

                          <div class="content white-text">
                            <p>Kami memberikan berbagai kemudahan dalam proses pergadaian barang.</p>
                          </div>
                        </div><!-- /.featured-wrapper -->
                      </div><!-- /.featured-box  -->
                  </div><!-- /.col-md-3 -->

                  <div class="col-md-3 col-sm-6">
                      <div class="featured-box green-bg text-center z-depth-1">
                        <div class="featured-wrapper">
                          <div class="intro-header">
                              <i class="material-icons white-text">&#xE051;</i>
                              <h2 class="white-text">Aman</h2>
                          </div>

                          <div class="content white-text">
                            <p>Kami memberikan jaminan keamanan terhadap barang yang anda gadai.</p>
                          </div>
                        </div><!-- /.featured-wrapper -->
                      </div><!-- /.featured-box  -->
                  </div><!-- /.col-md-3 -->

                  <div class="col-md-3 col-sm-6">
                      <div class="featured-box dark-bg lighten-2 text-center z-depth-1">
                        <div class="featured-wrapper">
                          <div class="intro-header">
                              <i class="material-icons white-text">&#xE323;</i>
                              <h2 class="white-text">Terjamin</h2>
                          </div>

                          <div class="content white-text">
                            <p>Kualitas layanan yang kami berikan sangat baik.</p>
                          </div>
                        </div><!-- /.featured-wrapper -->
                      </div><!-- /.featured-box  -->
                  </div><!-- /.col-md-3 -->                  

                  <div class="col-md-3 col-sm-6">
                      <div class="featured-box green-bg text-center z-depth-1">
                        <div class="featured-wrapper">
                          <div class="intro-header">
                              <i class="material-icons white-text">&#xE0B9;</i>
                              <h2 class="white-text">Banyak Kategori Barang</h2>
                          </div>

                          <div class="content white-text">
                            <p>Hampir mencakupi semua kategori barang yang dapat digadai.</p>
                          </div>
                        </div><!-- /.featured-wrapper -->
                      </div><!-- /.featured-box  -->
                  </div><!-- /.col-md-3 -->

              </div><!-- /.row -->
            </div><!-- /.container -->
        </section>


        <section class="section-padding agency-banner-2 bg-fixed parallax-bg overlay dark-5" data-stellar-background-ratio="0.5">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="subscribe-wrapper text-center">
                      <h2 class="white-text text-bold font-35 line-height-50">Want to know when we update our service and policy? Sign up for our newsletter </h2>

                      <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <form class="subscribe-form mailchimp" method="post">

                                <div class="clearfix">
                                  <div class="input-field">
                                      <label class="sr-only" for="email">Email</label>
                                    <input id="subscribeEmail" type="email" name="subscribeEmail" class="validate" >
                                    <!-- to showing error message -->
                                    <label for="subscribeEmail" data-error="wrong" data-success="right">Type your email</label>
                                  </div>

                                  <button type="submit" class="btn btn-lg text-capitalize text-bold waves-effect waves-light">Subscribe Now</button>

                                </div>

                                <!-- to showing success messages -->
                                <p class="subscription-success"></p>
                            </form>
                        </div><!-- /.col-md-8 -->
                      </div><!-- /.row -->

                  </div><!-- /.subscribe-wrapper -->
                </div><!-- /.col-md-8 -->
              </div><!-- /.row -->
            </div><!-- /.container -->
        </section>


        <section class="section-padding">
            <div class="container">
                <div class="text-center mb-80">
                  <a name="info2"><h2 class="section-title text-uppercase">Our Team</h2></a>
                  <p class="section-sub">Anggota Projek Akhir Praktikum Pemrograman Framework Kelompok 1 C2 2015.</p>
              </div>

              <div class="team-tab" role="tabpanel">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs nav-justified" role="tablist">
                      <li class="active">
                          <a href="#team-1" data-toggle="tab">
                            <img src="{{asset('assets/img/team/team-1.jpg')}}" class="img-responsive" alt="Image">
                          </a>
                      </li>

                      <li>
                          <a href="#team-2" data-toggle="tab">
                              <img src="{{asset('assets/img/team/team-2.jpg')}}" class="img-responsive" alt="Image">
                          </a>
                      </li>

                      <li>
                          <a href="#team-3" data-toggle="tab">
                              <img src="{{asset('assets/img/team/team-3.jpg')}}" class="img-responsive" alt="Image">
                          </a>
                      </li>

                      <li>
                          <a href="#team-4" data-toggle="tab">
                              <img src="{{asset('assets/img/team/team-4.jpg')}}" class="img-responsive" alt="Image">
                          </a>
                      </li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="panel-body">
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane fade in active" id="team-1">
                          <div class="row">
                              <div class="col-md-4 col-sm-3">
                                  <figure class="team-img text-center">
                                      <img src="{{asset('assets/img/team/team-large-1.png')}}" class="img-responsive" alt="Image">

                                      <ul class="team-social-links list-inline">
                                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                          <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                      </ul>
                                  </figure>
                              </div><!-- /.col-md-4 -->

                              <div class="col-md-8 col-sm-9">

                                  <div class="team-intro">
                                      <h3>R.H. Kimebmen Simbolon <small>1515015131</small></h3>
                                      <p></p>     
                                  </div>

                              </div> <!-- col-md-8 -->
                          </div> <!-- row -->
                      </div> <!--team-1 end-->

                        <div role="tabpanel" class="tab-pane fade" id="team-2">
                          <div class="row">
                              <div class="col-md-4 col-sm-3">
                                  <figure class="team-img text-center">
                                      <img src="{{asset('assets/img/team/team-large-2.png')}}" class="img-responsive" alt="Image">

                                      <ul class="team-social-links list-inline">
                                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                          <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                      </ul>
                                  </figure>
                              </div><!-- /.col-md-4 -->

                              <div class="col-md-8 col-sm-9">

                                  <div class="team-intro">
                                      <h3>Agung Layang Donga <small>1515015206</small></h3>
                                      <p></p>     
                                  </div>
                                  
                              </div> <!-- col-md-8 -->
                          </div> <!-- row -->
                        </div> <!--team-2 end -->

                        <div role="tabpanel" class="tab-pane fade" id="team-3">
                          <div class="row">
                              <div class="col-md-4 col-sm-3">
                                  <figure class="team-img text-center">
                                      <img src="{{asset('assets/img/team/team-large-3.png')}}" class="img-responsive" alt="Image">

                                      <ul class="team-social-links list-inline">
                                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                          <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                      </ul>
                                  </figure>
                              </div><!-- /.col-md-4 -->

                              <div class="col-md-8 col-sm-9">

                                  <div class="team-intro">
                                      <h3>Nadya Octavia Islami <small>1515015147</small></h3>
                                      <p></p>     
                                  </div>
                              </div> <!-- col-md-8 -->
                          </div> <!-- row -->
                        </div> <!--team-3 end -->

                        <div role="tabpanel" class="tab-pane fade" id="team-4">
                          <div class="row">
                              <div class="col-md-4 col-sm-3">
                                  <figure class="team-img text-center">
                                      <img src="{{asset('assets/img/team/team-large-4.png')}}" class="img-responsive" alt="Image">

                                      <ul class="team-social-links list-inline">
                                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                          <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                      </ul>
                                  </figure>
                              </div><!-- /.col-md-4 -->

                              <div class="col-md-8 col-sm-9">

                                  <div class="team-intro">
                                      <h3>Tasik Somba B. L. <small>1515015145</small></h3>
                                      <p></p>     
                                  </div>
                              </div> <!-- col-md-8 -->
                          </div> <!-- row -->
                        </div> <!--team-4 end -->

                    </div> <!--tab-content end -->
                  </div>

              </div> <!--tab-pan end -->  
            </div>
        </section>




        <footer class="footer footer-four">
            <div class="primary-footer green brand-bg text-center">
                <div class="container">

                  <a href="#top" class="page-scroll btn-floating btn-large green back-top waves-effect waves-light" data-section="#top">
                    <i class="material-icons">&#xE316;</i>
                  </a>

                  <ul class="social-link tt-animate ltr mt-20">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                  </ul>

                  <hr class="mt-15">

                  <div class="row">
                    <div class="col-md-12">
                          <div class="footer-logo">
                            <img src="{{asset('assets/img/logo-white.png')}}" alt="">
                          </div>

                          <span class="copy-text">Designed By Kelompok 1 C2 2015 &nbsp; | &nbsp;  All Rights Reserved &nbsp; | &nbsp; Copyright &copy; 2017</span>
                          <div class="footer-intro">
                            <p></p>
                          </div>
                    </div><!-- /.col-md-12 -->
                  </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.primary-footer -->

            <div class="secondary-footer brand-bg darken-2 text-center">
                <div class="container">
                    <ul>
                      <li><a href="{{url('landing')}}">Home</a></li>
                      <li><a href="#info2">About us</a></li>
                      <li><a href="#info1">Services</a></li>
                      <li><a href="{{url('logout')}}">Login</a></li>
                    </ul>
                </div><!-- /.container -->
            </div><!-- /.secondary-footer -->
        </footer>



        <!-- Preloader -->
        <div id="preloader">
          <div class="preloader-position"> 
            <img src="{{asset('assets/img/logo-colored.png')}}" alt="logo" >
            <div class="progress">
              <div class="indeterminate"></div>
            </div>
          </div>
        </div>
        <!-- End Preloader --> 


        <!-- jQuery -->
        <script src="{{asset('assets/js/jquery-2.1.3.min.js')}}"></script>
        <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/materialize/js/materialize.min.js')}}"></script>
        <script src="{{asset('assets/js/menuzord.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap-tabcollapse.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.sticky.min.js')}}"></script>
        <script src="{{asset('assets/js/smoothscroll.min.js')}}"></script>
        <script src="{{asset('assets/js/imagesloaded.js')}}"></script>
        <script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.inview.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.shuffle.min.js')}}"></script>
        <script src="{{asset('assets/owl.carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/flexSlider/jquery.flexslider-min.js')}}"></script>
        <script src="{{asset('assets/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/js/scripts.js')}}"></script>

        <!-- RS5.0 Core JS Files -->
        <script src="{{asset('assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{asset('assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

        <!-- RS5.0 Init  -->
        <script type="text/javascript">
            jQuery(document).ready(function() {
               jQuery(".materialize-slider").revolution({
                    sliderType:"standard",
                    sliderLayout:"fullscreen",
                    delay:9000,
                    navigation: {
                        keyboardNavigation:"off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation:"off",
                        onHoverStop:"off",
                        arrows: {
                            style:"erinyen",
                            enable:true,
                            hide_onmobile:true,
                            hide_under:600,
                            hide_onleave:true,
                            hide_delay:200,
                            hide_delay_mobile:1200,
                            tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div>    <div class="tp-arr-img-over"></div> <span class="tp-arr-titleholder">{{url('title')}}</span> </div>',
                            left: {
                                h_align:"left",
                                v_align:"center",
                                h_offset:30,
                                v_offset:0
                            },
                            right: {
                                h_align:"right",
                                v_align:"center",
                                h_offset:30,
                                v_offset:0
                            }
                        }
                    },
                    responsiveLevels:[1240,1024,778,480],
                    gridwidth:[1240,1024,778,480],
                    gridheight:[700,600,500,500],
                    parallax: {
                        type:"mouse",
                        origo:"slidercenter",
                        speed:2000,
                        levels:[2,3,4,5,6,7,12,16,10,50],
                    },

                });
            });
        </script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->
         
        <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
        
    </body>
  
</html>