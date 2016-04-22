<div class="panel panel-default">
	<header class="panel-heading">
		<div class="panel-actions">
			<a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
			<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss=""></a>
		</div>		
		<h2 class="panel-title">Formulario: Editar empleados</h2>
	</header>
	<div class="panel-body">
	<?php echo form_open(); ?>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>Nombres y apellidos</label>
					<input type="text" name="emp_nombre" class="form-control" value="<?php echo set_value('emp_nombre', $datos[0]->emp_nombre) ?>">
					<?php echo form_error('emp_nombre') ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="emp_email" class="form-control" value="<?php echo set_value('emp_email', $datos[0]->emp_email) ?>">
					<?php echo form_error('emp_email') ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<div class="form-group">
					<label>Tipo de acceso</label>
					<?php echo form_dropdown('emp_acceso', $opciones, set_value('emp_acceso', $datos[0]->emp_acceso), 'class="form-control"'); ?>
					<?php echo form_error('emp_acceso') ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="emp_password" class="form-control" value="<?php echo set_value('emp_password') ?>">
					<?php echo form_error('emp_password') ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3"><br>
				<button type="submit" class="btn btn-success btn-block"><i class="fa fa-database"></i> Editar empleado</button>
			</div>
		</div>
	<?php echo form_close(); ?>		
	</div>
</div>