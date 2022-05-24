<div class="card-body">
	<form method="post" action="<?=$url?>Poliza/sendNewPolicy" >
		<div>
			<h2 class="card-body">Información del asegurado</h2>
		</div>
		<div class="row">
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Nombre</strong>
				</label>
				<input autocomplete="off" type="text" name="nombre" class="form-control" maxlength="250" placeholder="Ingrese nombre del cliente" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Domicilio</strong>
				</label>
				<input autocomplete="off" type="text" name="domicilio" class="form-control" maxlength="500" placeholder="Ingrese calle" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Exterior</strong>
				</label>
				<input autocomplete="off" type="text" name="exterior" class="form-control" maxlength="50" placeholder="Ingrese número interior y/o exterior" required/>
			</div>	
		</div>
		<div class="row">
			<div class="mb-3 col-md-6">
				<label class="form-label">
					<strong>Cruces</strong>
				</label>
				<input autocomplete="off" type="text" name="entre" class="form-control" maxlength="500" placeholder="Ingrese entre qué calles se localiza" required/>
			</div>
			<div class="mb-3 col-md-6">
				<label class="form-label">
					<strong>Colonia</strong>
				</label>
				<input autocomplete="off" type="text" name="col" class="form-control" maxlength="255" placeholder="Ingrese nombre de la colonia" required/>
			</div>
		</div>
		<div class="row">
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Municipio</strong>
				</label>
				<select class="form-control mb-3" name="municipio" required>
					<option value="" disabled selected>Selecciona una opción</option>
					<?php foreach( $municipios as $municipio){ ?>
	                <option value="<?php echo $municipio->descripcion; ?>"><?php echo $municipio->descripcion; ?></option>
	                <?php } ?> 
				</select>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Teléfono</strong>
				</label>
				<input autocomplete="off" type="text" pattern="[0-9]{10,30}" name="telefono" class="form-control" placeholder="Ingrese número celular o teléfono de casa" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Código postal</strong>
				</label>
				<input id="ip_cp" autocomplete="off" type="text" name="cp" pattern="[0-9]{5,30}" class="form-control" placeholder="Ingrese código postal" required/>
			</div>
		</div>
		<div>
			<h2 class="card-body">Datos del vehículo</h2>
		</div>
		<div class="row">
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Marca</strong>
				</label>
				<input autocomplete="off" type="text" name="marca" class="form-control" maxlength="200" placeholder="Ingrese marca del vehículo" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Tipo</strong>
				</label>
				<input autocomplete="off" type="text" name="tipo" class="form-control" maxlength="200" placeholder="Ingrese el tipo de automóvil" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Año</strong>
				</label>
				<input autocomplete="off" type="number" name="ano" class="form-control" max="3000" placeholder="Ingrese el año del vehículo" required/>
			</div>
		</div>
		<div class="row">
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Color</strong>
				</label>
				<input autocomplete="off" type="text" name="color" class="form-control" maxlength="50" placeholder="Ingrese color del vehículo" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Placas</strong>
				</label>
				<input autocomplete="off" type="text" name="placas" class="form-control" maxlength="50" placeholder="Ingrese los datos de la placa vehícular" style="text-transform: uppercase;" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Versión</strong>
				</label>
				<input autocomplete="off" type="text" name="version" class="form-control" maxlength="100" placeholder="Ingrese la versión de autmóvil" required/>
			</div>
		</div>
		<div class="row">
			<div class="mb-3 col-md-6">
				<label class="form-label">
					<strong>No. serie</strong>
				</label>
				<input autocomplete="off" type="text" name="serie" class="form-control" maxlength="255" placeholder="Ingrese número de serie" required/>
			</div>
			<div class="mb-3 col-md-6">
				<label class="form-label">
					<strong>No. motor</strong>
				</label>
				<input autocomplete="off" type="text" name="nmotor" class="form-control" maxlength="255" placeholder="Ingrese número de motor" required/>
			</div>	
		</div>
		<div>
			<h2 class="card-body">Información de cobertura a contratar</h2>
		</div>
		<div class="row">
			<div class="mb-3 col-md-6">
				<label class="form-label">
					<strong>Expedición</strong>
				</label>
				<input autocomplete="off" type="date" min="1940-01-01"  name="expedicion" class="form-control" placeholder="Ingrese la fecha de expedición" required/>
			</div>
			<div class="mb-3 col-md-6">
				<label class="form-label">
					<strong>Vigencia</strong>
				</label>
				<input autocomplete="off" type="date" min="1940-01-01"  name="vigencia" class="form-control" placeholder="Ingrese la fecha de vigencia" required/>
			</div>
		</div>
		<div class="row">
			<div class="mb-3 mb-3 col-md-4">
				<label class="form-label">
					<strong>Cobertura</strong>
				</label>
				<select class="form-control mb-3" name="cobertura" required>
					<option value="" disabled selected>Selecciona una opción</option>
					<?php foreach( $coberturas as $cobertura){ ?>
	                <option value="<?php echo $cobertura->id; ?>"><?php echo $cobertura->cobertura; ?></option>
	                <?php } ?> 
				</select>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Deducible</strong>
				</label>
				<select class="form-control mb-3" name="deducible" required>
					<option value="" disabled selected>Selecciona una opción</option>
					<option value="Sí aplica">Sí aplica</option>
					<option value="No aplica">No aplica</option>
				</select>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Costo total</strong>
				</label>
				<input autocomplete="off" type="text" name="costo_total" class="form-control" placeholder="Ingrese la cantidad" data-mask="$99999999999" pattern="^\\$?(([1-9](\\d*|\\d{0,2}(,\\d{3})*))|0)(\\.\\d{1,2})?$" required/>
			</div>
		</div>
		<div class="mb-3">
			<label class="form-label">
				<strong>Observciones</strong>
			</label>
			<input autocomplete="off" type="textarea" name="observaciones" class="form-control" placeholder="Ingrese los comentarios de las observaciones" required/>
		</div>
		<div class="row">
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Pago inicial</strong>
				</label>
				<input autocomplete="off" type="text" name="pagoinicial" class="form-control" placeholder="Ingrese la cantidad" data-mask="$99999999999" pattern="^\\$?(([1-9](\\d*|\\d{0,2}(,\\d{3})*))|0)(\\.\\d{1,2})?$" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Pago mensual</strong>
				</label>
				<input autocomplete="off" type="text" pattern="^\\$?(([1-9](\\d*|\\d{0,2}(,\\d{3})*))|0)(\\.\\d{1,2})?$" name="pagomensual" class="form-control" placeholder="Ingrese el monto mensual" data-mask="$99999999999" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Plazo</strong>
				</label>
				<select class="form-control mb-3" name="plazo" required>
					<option value="" disabled selected>Selecciona una opción</option>
					<option value="0">Contado (Plazo 0)</option>
					<option value="1">1 MES</option>
					<option value="2">2 MESES</option>
					<option value="3">3 MESES</option>
					<option value="4">4 MESES</option>
					<option value="5">5 MESES</option>
					<option value="6">6 MESES</option>
					<option value="7">7 MESES</option>
					<option value="8">8 MESES</option>
					<option value="9">9 MESES</option>
					<option value="10">10 MESES</option>
					<option value="11">11 MESES</option>
				</select>
			</div>
		</div>
		<input type="hidden" name="captura"  value="<?php echo $name; ?>" /> 
		<div>
			<h2 class="card-body">Información de captura</h2>
		</div>
		<div class="row">
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Vendedor</strong>
				</label>
				<select class="form-control mb-3" name="vendedor" required>
					<option value="" disabled selected>Selecciona una opción</option>
					<?php foreach( $vendedores as $vendedor){ ?>
	                <option value="<?php echo $vendedor->nombre; ?>"><?php echo $vendedor->nombre; ?></option>
	                <?php } ?> 
				</select>
			</div>

			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Cobrador</strong>
				</label>
				<select class="form-control mb-3" name="cobrador" required>
					<option value="" disabled selected>Selecciona una opción</option>
					<?php foreach( $cobradores as $cobrador){ ?>
	                <option value="<?php echo $cobrador->nombre; ?>"><?php echo $cobrador->nombre; ?></option>
	                <?php } ?>
				</select>
			</div>

			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Plataforma</strong>
				</label>
				<select class="form-control mb-3" name="plataforma" required>
					<option value="" disabled selected>Selecciona una opción</option>
					<?php foreach( $plataformas as $plataforma){ ?>
	                <option value="<?php echo $plataforma->descripcion; ?>"><?php echo $plataforma->descripcion; ?></option>
	                <?php } ?>               
				</select>
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Enviar</button> 
	</form>
</div>
