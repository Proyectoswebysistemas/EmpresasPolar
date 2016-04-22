<body>
    <!-- start: body -->
    <section class="body">
        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="<?php echo site_url('escritorio') ?>" class="logo">
                    <img src="<?php echo base_url('assets/images/empresas-polar-logo.png') ?>" height="57" alt="Empresas Polar" style="margin-top: -10px" />
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
                            <img src="<?php echo base_url('assets/images/%21logged-user.jpg') ?>" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/%21logged-user.jpg" />
                        </figure>
                        <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                            <span class="name"><?php echo $this->session->userdata('nombre'); ?></span>
                            <span class="role"><?php echo $this->session->userdata('acceso'); ?></span>
                        </div>
                        <i class="fa custom-caret"></i>
                    </a>
                    <div class="dropdown-menu">
                        <ul class="list-unstyled">
                            <li class="divider"></li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> Mi perfil</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="<?php echo site_url('login/desconectar') ?>"><i class="fa fa-power-off"></i> Cerrar sesión</a>
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
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <span>Empleados</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="<?php echo site_url('empleados/crear') ?>">
                                                <i class="fa fa-plus-circle"></i> Agregar más 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo site_url('empleados/buscar_editar') ?>">
                                                <i class="fa fa-pencil"></i> Modificar información 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo site_url('empleados/buscar_eliminar') ?>">
                                                <i class="fa fa-trash"></i> Eliminar técnicos 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo site_url('empleados/index') ?>">
                                                <i class="fa fa-bars"></i> Vizualizar listado completo 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-group" aria-hidden="true"></i>
                                        <span>Técnicos</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="<?php echo site_url('tecnicos/crear') ?>">
                                                <i class="fa fa-plus-circle"></i> Agregar más 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo site_url('tecnicos/buscar_editar') ?>">
                                                <i class="fa fa-pencil"></i> Modificar información 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo site_url('tecnicos/buscar_eliminar') ?>">
                                                <i class="fa fa-trash"></i> Eliminar técnicos 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo site_url('tecnicos/index') ?>">
                                                <i class="fa fa-bars"></i> Vizualizar listado completo 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('login/desconectar') ?>">
                                        <i class="fa fa-power-off" aria-hidden="true"></i>
                                        <span>Cerrar sesión</span>
                                    </a>
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
                            <?php  
                                    if(isset($item_descripcion) and count($item_descripcion)>=1){
                                        $fin = count($item_descripcion);
                                        for ($i=0; $i < $fin ; $i++) { ?>
                                        <li>
                                            <a href="<?php echo site_url('/').$item_descripcion[$i][0]['link'] ?>"> 
                                                <?php echo $item_descripcion[$i][1]['etiqueta'] ?> 
                                                <i class="<?php echo $item_descripcion[$i][2]["icon"] ?>"></i> 
                                            </a>
                                        </li>
                            <?php    }}?>
                        </ol>
                    </div>
                </header>