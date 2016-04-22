<div class="panel panel-default">
	<header class="panel-heading">
		<div class="panel-actions">
			<a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
			<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss=""></a>
		</div>		
		<h2 class="panel-title">Aplicación</h2>
	</header>
	<div class="panel-body">
		<?php  
			if( isset($_GET['acceso']) and $_GET['acceso'] == "false" ) { 
		?>
			<div class="alert alert-default">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<strong>¿Alerta,</strong> disculpe usted no tiene permisos para efectuar la solicitud realizada.
			</div>
		<?php  
			} 
		?>
	</div> 
</div>