<form method="post" action="<?=$url?>cancelarreactivarpoliza/setPolizaStatus">
	<div class="card-body">
		<form method="post" >
			<div class="mb-3">
				<label class="form-label"><strong>Ingresa el folio de la póliza, la acción a realizar y motivo</strong></label>
				<input autocomplete="off" type="text" name="buscar" class="form-control" placeholder="Ingrese folio de búsqueda" required/>
			</div>
			<div class="mb-3">
				<select class="form-control mb-3" autocomplete="off" required="required" type="text" name="accion" id="Numero de parte" />
				<option disabled selected>Seleccione acción</option>
				<option>Cancelar</option>
				<option>Reactivar</option>
			</select>
		</div>
		<div class="mb-3">
			<input autocomplete="off" type="textarea" name="mot" class="form-control" placeholder="Ingresa motivo" required/>
		</div>
		<button type="submit" class="btn btn-primary">Enviar</button> 
	</form>
</div>
</form>