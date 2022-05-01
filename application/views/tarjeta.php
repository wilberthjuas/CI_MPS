<div class="card-body">
	<form method="post" action="<?=$url?>tarjeta/sendForm">
		<div class="mb-3">
			<label class="form-label"><strong>Ingresa datos y forma de búsqueda</strong></label>
			<input autocomplete="off" type="text" name="buscar" class="form-control" placeholder="Ingrese datos de búsqueda" required/>
		</div>
		<div class="mb-3">
			<select class="form-control mb-3" autocomplete="off" required="required" type="text" name="tipo" id="Numero de parte" />
			<option disabled selected>Selecciona una opción</option>
			<option>Folio</option>
			<option>Placas</option>
			<option>Nombre</option>
		</select>
	</div>

	<button type="submit" class="btn btn-primary">Enviar</button> 
</form>
</div>