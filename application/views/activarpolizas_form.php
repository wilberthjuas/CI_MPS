<form method="post" action="<?=$url?>CancelarReactivarPoliza/setPolizaStatus">
	<div class="card-body">
		<form method="post" >
			<div class="mb-3">
				<label class="form-label"><strong>Ingresa el folio de la póliza, la acción a realizar y motivo</strong></label>
				<input autocomplete="off" type="text" name="buscar" class="form-control" placeholder="Ingrese folio de búsqueda" required/>
			</div>
			<div class="mb-3">
				<select class="form-control mb-3" name="accion" />
				<option value="" disabled selected>Seleccione acción</option>
				<option value="Cancelar">Cancelar</option>
				<option value="Reactivar">Reactivar</option>
			</select>
		</div>
		<div class="mb-3">
			<input autocomplete="off" type="textarea" name="mot" class="form-control" placeholder="Ingresa motivo" required/>
		</div>
		<button type="submit" class="btn btn-primary">Enviar</button> 
	</form>
</div>
</form>