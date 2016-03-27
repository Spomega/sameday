<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
		<title>Same Day Auto Shipping</title>
		<link href="favicon.png" type="image/x-icon" rel="shortcut icon">
                 {!! HTML::style('assets/css/master.css')  !!}
		 {!! HTML::style('assets/plugins/iview/css/iview.css')  !!}
		 {!! HTML::style('assets/plugins/iview/css/skin/style.css')  !!}
	        
                
		<!-- SWITCHER -->
                 {!! HTML::style('assets/plugins/switcher/css/switcher.css',array('id'=>'switch-css'))  !!}
               
<!--		<link href="assets/plugins/switcher/css/switcher.css" rel="stylesheet" id="switcher-css" media="all">
		<link href="assets/plugins/switcher/css/color1.css" rel="alternate stylesheet" title="color1" media="all">
		<link href="assets/plugins/switcher/css/color2.css" rel="alternate stylesheet" title="color2" media="all">
		<link href="assets/plugins/switcher/css/color3.css" rel="alternate stylesheet" title="color3" media="all">
		<link href="assets/plugins/switcher/css/color4.css" rel="alternate stylesheet" title="color4" media="all">
		<link href="assets/plugins/switcher/css/color5.css" rel="alternate stylesheet" title="color5" media="all">-->

<!--		<script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script>-->
                {!! HTML::script('assets/plugins/jquery/jquery-1.11.1.min.js') !!}
                
   

   
                
                @yield('head')
	
	</head>


	<body>
    
    <!-- Loader -->
<div id="page-preloader"><span class="spinner"></span></div>
<!-- Loader end -->


		<div  id="this-top" class="layout-theme animated-css"  data-header="sticky" data-header-top="200"  >

			<!-- Start Switcher -->
			<div class="switcher-wrapper">
<!--				<div class="demo_changer">
					<div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>
					<div class="form_holder">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="predefined_styles">
									<div class="skin-theme-switcher">
										<h4>Color</h4>
										<a href="javascript:void(0);" data-switchcolor="color1" class="styleswitch" style="background-color:#fe5656;"> </a>
										<a href="javascript:void(0);" data-switchcolor="color2" class="styleswitch" style="background-color:#4fb0fd;"> </a>
										<a href="javascript:void(0);" data-switchcolor="color3" class="styleswitch" style="background-color:#ffc73c;"> </a>
										<a href="javascript:void(0);" data-switchcolor="color4" class="styleswitch" style="background-color:#ff8300;"> </a>
										<a href="javascript:void(0);" data-switchcolor="color5" class="styleswitch" style="background-color:#02cc8b;"> </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>-->
                                {!! HTML::script('assets/plugins/switcher/js/bootstrap-select.js') !!}
                                {!! HTML::script('assets/plugins/switcher/js/evol.colorpicker.min.js') !!}
                                {!! HTML::script('assets/plugins/switcher/js/dmss.js') !!}
<!--				<script src="assets/plugins/switcher/js/bootstrap-select.js"></script>
				<script src="assets/plugins/switcher/js/evol.colorpicker.min.js"></script>
				<script src="assets/plugins/switcher/js/dmss.js"></script>-->
			</div>
			<!-- End Switcher -->

			<div id="wrapper">

				<!-- HEADER -->
				<div class="header">
					<div class="top-header">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="header-contacts">
										<span class="header-contacts__item"><i class="icon fa fa-phone"></i>+ 233261777441</span>
										<a class="header-contacts__item" href="mailto:info@samedayautoshipping.com"><i class="icon fa fa-envelope"></i>info@samedayautoshipping.com</a>
									</div>
									<ul class="social-links list-inline">
										<li><a class="icon fa fa-facebook" href="javascript:void(0);"></a></li>
										<li><a class="icon fa fa-twitter" href="javascript:void(0);"></a></li>
										<li><a class="icon fa fa-youtube-play" href="javascript:void(0);"></a></li>
										<li><a class="icon fa fa-instagram" href="javascript:void(0);"></a></li>
										<li><a class="icon fa fa-google-plus" href="javascript:void(0);"></a></li>
									</ul>
								</div><!-- end col -->
							</div><!-- end row -->
						</div><!-- end container -->
					</div><!-- end top-header -->


					<div class="header__inner">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-xs-12"> <a href="index.html" class="logo"> <img class="logo__img img-responsive" src="assets/img/logo.png" height="50" width="111" alt="Logo"> </a>
              <div class="navbar yamm">
                <div class="navbar-header hidden-md hidden-lg hidden-sm">
                  <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                  <a href="javascript:void(0);" class="navbar-brand"></a> </div>
                <div id="navbar-collapse-1" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <li><a href="home.html">HOME</a></li>
                    <li><a href="vehicle-listings.html">VEHICLE LISTINGS</a> </li>
                    <li><a href="car-details.html">CAR DETAILS</a></li>
<!--                    <li class="dropdown" ><a href="news.html">NEWS</a>
                      <ul  class="dropdown-menu">
                        <li> <a href="news-grid.html">DROPDOWN</a> </li>
                        <li> <a href="news-details.html">DROPDOWN</a> </li>
                      </ul>
                    </li>
                    <li><a href="news-grid.html">NEWS GRID</a></li>
                    <li><a href="news-details.html">NEWS DETAILS</a></li>-->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end container --> 
      </div><!-- end header__inner -->
				</div><!-- end header -->

				<div class="block-title">
					<div class="block-title__inner section-bg section-bg_second">
						<div class="bg-inner">
							<h1 class="ui-title-page">vehicle listings</h1>
							<div class="decor-1 center-block"></div>
							<ol class="breadcrumb">
								<li><a href="javascript:void(0);">HOME</a></li>
								<li class="active">listings</li>
							</ol>
						</div><!-- end bg-inner -->
					</div><!-- end block-title__inner -->
				</div><!-- end block-title -->

				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<main class="main-content">

                                                        @yield('main')
						
							</main><!-- end main-content -->
						</div><!-- end col -->


						<div class="col-md-3">
							<aside class="sidebar">
								

							@yield('side')	

							</aside>
						</div><!-- end col -->
					</div><!-- end row -->
				</div><!-- end container -->



				<footer class="footer">
					<div class="wrap-section-border">
						<section class="section_mod-h section-bg section-bg_second">
							<div class="bg-inner border-section-top border-section-top_mod-b">
								<div class="container">
									<div class="row">
										<div class="col-xs-12">
											<h2 class="footer-title">SAMEDAY <span class="footer-title__inner">AUTOSHIPPING</span></h2>
											<div class="decor-1 decor-1_mod-b"></div>
										</div><!-- end col -->
									</div><!-- end row -->

									<div class="row">
										<div class="col-xs-12">
											<div class="footer__name">: SHOWROOM LOCATION :</div>
											<div class="footer__text">Tema</div>
										</div><!-- end col -->
									</div><!-- end row -->
									<div class="row">
										<div class="col-xs-12">
											<div class="footer__item">
												<span class="footer__name">Phone:</span>
												<span class="footer__text">+ 233261777441</span>
											</div>
<!--											<div class="footer__item">
												<span class="footer__name">Fax:</span>
												<span class="footer__text">+ 233261777441</span>
											</div>-->
											<div class="footer__item">
												<span class="footer__name">email:</span>
												<span class="footer__text">info@samedayautoshipping.com</span>
											</div>
											<div class="footer__item">
												<span class="footer__name">Hours:</span>
												<span class="footer__text">Mon - Fri :: 9am - 6pm</span>
											</div>
										</div><!-- end col -->
<!--									</div> end row 
									<div class="row">
										<div class="col-xs-12">
											<ul class="social-links list-inline">
												<li><a class="icon fa fa-facebook" href="javascript:void(0);"></a></li>
												<li><a class="icon fa fa-twitter" href="javascript:void(0);"></a></li>
												<li><a class="icon fa fa-youtube-play" href="javascript:void(0);"></a></li>
												<li><a class="icon fa fa-instagram" href="javascript:void(0);"></a></li>
												<li><a class="icon fa fa-google-plus" href="javascript:void(0);"></a></li>
											</ul>
										</div> end col 
									</div> end row -->
								</div><!-- end container -->
							</div><!-- end bg-inner -->
						</section><!-- end section_mod-b -->
					</div><!-- end wrap-section-border -->
					<div class="footer__wrap-btn"> <a class="footer__btn scroll" href="#this-top">top</a> </div>

					<div class="copyright">Copyrights 2016 <a class="copyright__link" href="javascript:void(0);">samedayautoshipping</a> : : All rights reserved</div>
				</footer>

			</div><!-- end #wrapper -->
		</div><!-- end layout-theme -->

		<span class="scroll-top"> <i class="fa fa-angle-up"> </i></span>



		

                <!-- SCRIPTS -->
                {!! HTML::script('assets/js/jquery-migrate-1.2.1.js') !!}
                {!! HTML::script('assets/plugins/bootstrap/js/bootstrap.min.js') !!}
                {!! HTML::script('assets/js/modernizr.custom.js') !!}
                {!! HTML::script('assets/plugins/owl-carousel/owl.carousel.min.js') !!}
                {!! HTML::script('assets/js/waypoints.min.js') !!}
                {!! HTML::script('assets/plugins/prettyphoto/js/jquery.prettyPhoto.js') !!}
                {!! HTML::script('http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js') !!}
                {!! HTML::script('assets/plugins/jelect/jquery.jelect.js') !!}
                {!! HTML::script('assets/plugins/nouislider/jquery.nouislider.all.min.js') !!}
<!--                <script src="assets/js/jquery-migrate-1.2.1.js"></script>
                <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
                <script src="assets/js/modernizr.custom.js"></script>
                <script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
                <script src="assets/js/waypoints.min.js"></script>
                <script src="assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
                <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
                <script src="assets/plugins/jelect/jquery.jelect.js"></script>
                <script src="assets/plugins/nouislider/jquery.nouislider.all.min.js"></script>-->


                <!--THEME-->
                {!! HTML::script('assets/js/cssua.min.js') !!}
                {!! HTML::script('assets/js/wow.min.js') !!}
                {!! HTML::script('assets/js/custom.js') !!}
<!--                <script src="assets/js/cssua.min.js"></script>
                <script src="assets/js/wow.min.js"></script>
                <script src="assets/js/custom.js"></script>-->


	</body>
</html>
