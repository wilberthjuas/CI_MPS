<div class="card-body">
	<div class="card-header">
		<a class="btn btn-success" href="<?php echo base_url('poliza/cargarCobertura');?>"> CargarCoberturas</a>
	</div>
	<div class="card-header">
		<a class="btn btn-success" href="<?php echo base_url('poliza/migrarDatos');?>"> MigrarDatos</a>
	</div>
	<br/>
	<form method="post" action="<?=$url?>Poliza/modifyPolicy">
		<div class="mb-3">
			<label class="form-label">
				<strong>Ingresa el folio de la póliza</strong>
			</label>
			<input autocomplete="off" type="text" name="buscar" class="form-control" placeholder="Ingrese datos de búsqueda" required/>
		</div>

		<button type="submit" class="btn btn-primary">Enviar</button> 
	</form>
</div>
