<div class="panel panel-default">
	<header class="panel-heading">
		<div class="panel-actions">
			<a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
			<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss=""></a>
		</div>		
		<h2 class="panel-title"><a href="<?php echo site_url('empleados/crear') ?>"><i class="fa fa-plus-circle text-success"></i></a> | Listado completo de empleados</h2>
	</header>
	<div class="panel-body">
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>NOMBRES Y APELLIDOS</th>
					<th>EMAIL</th>
					<th>ACCESO</th>
					<th>MENU DE OPCIONES</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($datos as $filas){ ?>
				<tr>
					<td><?php echo $filas->emp_nombre ?></td>
					<td><?php echo $filas->emp_email ?></td>
					<td><?php echo ucwords($filas->emp_acceso) ?></td>
					<td>
						<div class="col-md-6">
							<a href="<?php echo site_url('empleados/editar/'.$filas->emp_id.'') ?>" class="btn btn-warning btn-block" data-toggle="tooltip" data-placement="left" data-original-title="Editar datos de <?php echo $filas->emp_nombre ?>"><i class="fa fa-pencil"></i></a>
						</div>
						<div class="col-md-6">
							<a href="<?php echo site_url('empleados/confirmar_eliminar/'.$filas->emp_id.'') ?>" class="btn btn-danger btn-block" data-toggle="tooltip" data-placement="left" data-original-title="Eliminar datos de <?php echo $filas->emp_nombre ?>"><i class="fa fa-trash"></i></a>
						</div>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
</section>
</div>
<!-- end: inner-wrapper -->
</section>
<!-- end: body -->