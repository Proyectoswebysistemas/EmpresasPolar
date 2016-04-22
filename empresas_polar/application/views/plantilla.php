
<!doctype html>
<html class="fixed js flexbox flexboxlegacy no-touch csstransforms csstransforms3d no-overflowscrolling no-mobile-device custom-scroll sidebar-left-collapsed" lang="es">
<head>
	<!-- Basic -->
	<meta charset="UTF-8">

	<title><?php echo $titulo_pagina ?></title>
	<meta name="keywords" content="Empresas polar" />
	<meta name="description" content="Sistema administrativo del departamento de control y analisis de mantenimiento de equipos">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.css') ?>" />

	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.css') ?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/magnific-popup/magnific-popup.css') ?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') ?>" />

	<!-- Specific Page Vendor CSS -->		
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/jquery-ui/jquery-ui.css') ?>" />		
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/jquery-ui/jquery-ui.theme.css') ?>" />		
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') ?>" />		
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/morris.js/morris.css') ?>" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/stylesheets/theme.css') ?>" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/stylesheets/theme-custom.css') ?>">

	<!-- Head Libs -->
	<script src="<?php echo base_url('assets/vendor/modernizr/modernizr.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/style-switcher/style.switcher.localstorage.js') ?>"></script>

</head> <!-- seccion I head -->




<!-- seccion II Nav y contenido  -->
<body>
	<!-- start: body -->
	<section class="body">
		
		<!-- start: header -->
		<header class="header">
			<div class="logo-container">
				<a href="http://preview.oklerthemes.com/porto-admin/" class="logo">
					<img src="assets/images/logo.png" height="35" alt="Porto Admin" />
				</a>
				<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
					<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
				</div>
			</div>			
			<!-- start: search & user box -->
			<div class="header-right">
				<span class="separator"></span>
				<div id="userbox" class="userbox">
					<a href="#" data-toggle="dropdown">
						<figure class="profile-picture">
							<img src="assets/images/%21logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/%21logged-user.jpg" />
						</figure>
						<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
							<span class="name">John Doe Junior</span>
							<span class="role">administrator</span>
						</div>

						<i class="fa custom-caret"></i>
					</a>

					<div class="dropdown-menu">
						<ul class="list-unstyled">
							<li class="divider"></li>
							<li>
								<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
							</li>
							<li>
								<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
							</li>
							<li>
								<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end: search & user box -->
		</header>
		<!-- end: header -->  <!-- seccion II nav -->

		<!-- start: inner-wrapper -->
		<div class="inner-wrapper">
			
			<!-- start: sidebar -->
			<aside id="sidebar-left" class="sidebar-left">
				
				<div class="sidebar-header">
					<div class="sidebar-title">
						Menú aplicación
					</div>
					<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
				
				<div class="nano">
					<div class="nano-content">
						<nav id="menu" class="nav-main" role="navigation">
							<ul class="nav nav-main">
								<li class="nav-active">
									<a href="<?php echo site_url('escritorio') ?>">
										<i class="fa fa-home" aria-hidden="true"></i>
										<span>Escritorio</span>
									</a>
								</li>
								<li class="nav-parent">
									<a>
										<i class="fa fa-columns" aria-hidden="true"></i>
										<span>Layouts</span>
									</a>
									<ul class="nav nav-children">
										<li>
											<a href="layouts-default.html">
												Default
											</a>
										</li>										
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>				
			</aside>
			<!-- end: sidebar -->

			<section role="main" class="content-body">
				<header class="page-header">
					<h2>Escritorio</h2>
					
					<div class="right-wrapper pull-right">
						<ol class="breadcrumbs">
							<li>
								<a href="<?php echo site_url('escritorio') ?>">
									<i class="fa fa-home"></i>
								</a>
							</li>
							<li><span>Escritorio</span></li>
						</ol>
					</div>
				</header>

				<!-- start: page -->
				<div class="row">					
					<div class="col-md-6 col-lg-12 col-xl-6">
						<div class="row">
							<div class="col-md-12 col-lg-6 col-xl-6">
								<section class="panel panel-featured-left panel-featured-primary">
									<div class="panel-body">
										<div class="widget-summary">
											<div class="widget-summary-col widget-summary-col-icon">
												<div class="summary-icon bg-primary">
													<i class="fa fa-life-ring"></i>
												</div>
											</div>
											<div class="widget-summary-col">
												<div class="summary">
													<h4 class="title">Support Questions</h4>
													<div class="info">
														<strong class="amount">1281</strong>
														<span class="text-primary">(14 unread)</span>
													</div>
												</div>
												<div class="summary-footer">
													<a class="text-muted text-uppercase">(view all)</a>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
							<div class="col-md-12 col-lg-6 col-xl-6">
								<section class="panel panel-featured-left panel-featured-secondary">
									<div class="panel-body">
										<div class="widget-summary">
											<div class="widget-summary-col widget-summary-col-icon">
												<div class="summary-icon bg-secondary">
													<i class="fa fa-usd"></i>
												</div>
											</div>
											<div class="widget-summary-col">
												<div class="summary">
													<h4 class="title">Total Profit</h4>
													<div class="info">
														<strong class="amount">$ 14,890.30</strong>
													</div>
												</div>
												<div class="summary-footer">
													<a class="text-muted text-uppercase">(withdraw)</a>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
							<div class="col-md-12 col-lg-6 col-xl-6">
								<section class="panel panel-featured-left panel-featured-tertiary">
									<div class="panel-body">
										<div class="widget-summary">
											<div class="widget-summary-col widget-summary-col-icon">
												<div class="summary-icon bg-tertiary">
													<i class="fa fa-shopping-cart"></i>
												</div>
											</div>
											<div class="widget-summary-col">
												<div class="summary">
													<h4 class="title">Today's Orders</h4>
													<div class="info">
														<strong class="amount">38</strong>
													</div>
												</div>
												<div class="summary-footer">
													<a class="text-muted text-uppercase">(statement)</a>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
							<div class="col-md-12 col-lg-6 col-xl-6">
								<section class="panel panel-featured-left panel-featured-quartenary">
									<div class="panel-body">
										<div class="widget-summary">
											<div class="widget-summary-col widget-summary-col-icon">
												<div class="summary-icon bg-quartenary">
													<i class="fa fa-user"></i>
												</div>
											</div>
											<div class="widget-summary-col">
												<div class="summary">
													<h4 class="title">Today's Visitors</h4>
													<div class="info">
														<strong class="amount">3765</strong>
													</div>
												</div>
												<div class="summary-footer">
													<a class="text-muted text-uppercase">(report)</a>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
				<!-- end: page -->
		<!-- end: seccion II Nav y contenido  -->
			





		<!-- start: seccion III footer -->	
			</section>
		</div>
		<!-- end: inner-wrapper -->
	
	
	</section>
	<!-- end: body -->
	
	<!-- Vendor -->
	<script src="<?php echo base_url('assets/vendor/jquery/jquery.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/jquery-cookie/jquery-cookie.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/style-switcher/style.switcher.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/nanoscroller/nanoscroller.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/magnific-popup/jquery.magnific-popup.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/jquery-placeholder/jquery-placeholder.js') ?>"></script>

	<!-- Specific Page Vendor -->		
	<script src="<?php echo base_url('assets/vendor/jquery-ui/jquery-ui.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/jquery-appear/jquery-appear.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/flot/jquery.flot.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/flot.tooltip/flot.tooltip.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/flot/jquery.flot.pie.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/flot/jquery.flot.categories.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/flot/jquery.flot.resize.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/jquery-sparkline/jquery-sparkline.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/raphael/raphael.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/morris.js/morris.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/gauge/gauge.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/snap.svg/snap.svg.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/liquid-meter/liquid.meter.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/jqvmap/jquery.vmap.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/jqvmap/data/jquery.vmap.sampledata.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/jqvmap/maps/jquery.vmap.world.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js') ?>"></script>		
	<script src="<?php echo base_url('assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js') ?>"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="<?php echo base_url('assets/javascripts/theme.js') ?>"></script>

	<!-- Theme Custom -->
	<script src="<?php echo base_url('assets/javascripts/theme.custom.js') ?>"></script>

	<!-- Theme Initialization Files -->
	<script src="<?php echo base_url('assets/javascripts/theme.init.js') ?>"></script>
	<!-- Analytics to Track Preview Website -->		
	<script>		  
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)		  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');		  ga('create', 'UA-42715764-8', 'auto');		  ga('send', 'pageview');		
	</script>
	<!-- Examples -->
	<script src="<?php echo base_url('assets/javascripts/dashboard/examples.dashboard.js') ?>"></script>
</body>
</html>