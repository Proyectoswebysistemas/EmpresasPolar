<!doctype html>
<html class="fixed">
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

  <link rel="icon" href="<?php echo base_url('assets/images/polar_f.png') ?>">

  <!-- Head Libs -->
  <script src="<?php echo base_url('assets/vendor/modernizr/modernizr.js') ?>"></script>    
  <script src="<?php echo base_url('assets/vendor/style-switcher/style.switcher.localstorage.js') ?>"></script>

</head>
  <body>
    <!-- start: page -->
    <section class="body-sign">
      <div class="center-sign">
        <?php if(isset($_GET['acceso']) and $_GET['acceso']==0){ ?>
              <div class="alert alert-default">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>¿Alerta</strong> los datos ingresado email o password son incorrectos?
              </div>
        <?php } ?>
        <a href="<?php echo site_url('login') ?>" class="logo pull-left">
          <img src="<?php echo base_url('assets/images/polar_f.png') ?>" height="84" alt="Porto Admin" style="margin-top: -15px" />
        </a>
        <div class="panel panel-sign">
          <div class="panel-title-sign mt-xl text-right">
            <h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Inicio de sesión</h2>
          </div>
          <div class="panel-body">
            <?php echo form_open(); ?>
              <div class="form-group mb-lg">
                <label>Correo electronico</label>
                <div class="input-group input-group-icon">
                <input type="text" name="emp_email" id="inputEmail" class="form-control input-lg" placeholder="Correo electronico" autofocus value="<?php echo set_value('emp_email')?>">
                <p class="text-info"><strong><?php echo form_error('emp_email') ?></strong></p>
                  <span class="input-group-addon">
                    <span class="icon icon-lg">
                      <i class="fa fa-user"></i>
                    </span>
                  </span>
                </div>
              </div>

              <div class="form-group mb-lg">
                <div class="clearfix">
                  <label class="pull-left">Clave de acceso</label>
                </div>
                <div class="input-group input-group-icon">
                  <input type="password" name="emp_password" id="inputPassword" class="form-control input-lg" placeholder="Clave de acceso" value="<?php echo set_value('emp_password')?>">
                  <p class="text-info"><strong><?php echo form_error('emp_password') ?></strong></p>
                  <span class="input-group-addon">
                    <span class="icon icon-lg">
                      <i class="fa fa-lock"></i>
                    </span>
                  </span>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-8">
                  <div class="checkbox-custom checkbox-default">
                    <input id="RememberMe" name="rememberme" type="checkbox"/>
                    <label for="RememberMe">Recuerda mis datos</label>
                  </div>
                </div>

                <div class="col-sm-4 text-right">
                  <button type="submit" class="btn btn-primary hidden-xs">Abrir sesión</button>
                  <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Abrir sesión</button>
                </div>
              </div>
            <?php echo form_close(); ?>
          </div>
        </div>

        <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2016. Todos los derechos reservados.</p>
      </div>
    </section>
    <!-- end: page -->

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
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)     })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');     ga('create', 'UA-42715764-8', 'auto');      ga('send', 'pageview');   
  </script>
  <!-- Examples -->
  <script src="<?php echo base_url('assets/javascripts/dashboard/examples.dashboard.js') ?>"></script>
</body>
</html>