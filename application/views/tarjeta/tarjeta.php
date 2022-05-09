<div class="card-body">
	<form method="post" action="<?=$url?>tarjeta/sendForm">
		<div class="mb-3">
			<label class="form-label"><strong>Ingresa datos y forma de búsqueda</strong></label>
			<input autocomplete="off" type="text" name="buscar" class="form-control" placeholder="Ingrese datos de búsqueda" required/>
		</div>
		<div class="mb-3">
			<select class="form-control mb-3" name="tipo" required>
			<option value="" disabled selected>Selecciona una opción</option>
			<option value="Folio">Folio</option>
			<option value="Placas">Placas</option>
			<option value="Nombre">Nombre</option>
		</select>
	</div>

	<button type="submit" class="btn btn-primary">Enviar</button> 
</form>
</div>