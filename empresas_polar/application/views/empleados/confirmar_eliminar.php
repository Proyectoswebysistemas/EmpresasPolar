<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?php echo $titulo_pagina ?></title>
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.css') ?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.css') ?>" />
</head>
<body>
	<div class="container"><br>
		<a href="<?php echo site_url('empleados/eliminar/'.$id.'')?>" class="btn btn-danger" data-toggle="tooltip" data-placement="left" data-original-title="Eliminar datos del empleado"><i class="fa fa-trash"></i> Eliminar Empleado</a>
		<a href="<?php echo site_url('empleados/index') ?>" class="btn btn-default"><i class="fa fa-bars"></i> Ir a atras y cancelar todo</a>
	</div>
</body>
</html>