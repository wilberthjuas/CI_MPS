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
				<input autocomplete="off" type="text" name="nombre" class="form-control" placeholder="Ingrese nombre del cliente" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Domicilio</strong>
				</label>
				<input autocomplete="off" type="text" name="domicilio" class="form-control" placeholder="Ingrese calle" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Exterior</strong>
				</label>
				<input autocomplete="off" type="text" name="exterior" class="form-control" placeholder="Ingrese número interior y/o exterior" required/>
			</div>	
		</div>
		<div class="row">
			<div class="mb-3 col-md-6">
				<label class="form-label">
					<strong>Cruces</strong>
				</label>
				<input autocomplete="off" type="text" name="entre" class="form-control" placeholder="Ingrese entre qué calles se localiza" required/>
			</div>
			<div class="mb-3 col-md-6">
				<label class="form-label">
					<strong>Colonia</strong>
				</label>
				<input autocomplete="off" type="text" name="col" class="form-control" placeholder="Ingrese nombre de la colonia" required/>
			</div>
		</div>
		<div class="row">
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Municipio</strong>
				</label>
				<input autocomplete="off" type="text" name="municipio" class="form-control" placeholder="Ingrese nombre de municipio o comunidad" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Teléfono</strong>
				</label>
				<input autocomplete="off" type="text" pattern="{1,10}" name="telefono" class="form-control" placeholder="Ingrese número celular o teléfono de casa" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Código postal</strong>
				</label>
				<input id="ip_cp" autocomplete="off" type="text" name="cp" class="form-control" placeholder="Ingrese código postal" required/>
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
				<input autocomplete="off" type="text" name="marca" class="form-control" placeholder="Ingrese marca del vehículo" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Tipo</strong>
				</label>
				<input autocomplete="off" type="text" name="tipo" class="form-control" placeholder="Ingrese el tipo de automóvil" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Año</strong>
				</label>
				<input autocomplete="off" type="number" name="ano" class="form-control" placeholder="Ingrese el año del vehículo" required/>
			</div>
		</div>
		<div class="row">
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Color</strong>
				</label>
				<input autocomplete="off" type="text" name="color" class="form-control" placeholder="Ingrese color del vehículo" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Placas</strong>
				</label>
				<input autocomplete="off" type="text" name="placas" class="form-control" placeholder="Ingrese los datos de la placa vehícular" style="text-transform: uppercase;" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Versión</strong>
				</label>
				<input autocomplete="off" type="text" name="version" class="form-control" placeholder="Ingrese la versión de autmóvil" required/>
			</div>
		</div>
		<div class="row">
			<div class="mb-3 col-md-6">
				<label class="form-label">
					<strong>No. serie</strong>
				</label>
				<input autocomplete="off" type="text" name="serie" class="form-control" placeholder="Ingrese número de serie" required/>
			</div>
			<div class="mb-3 col-md-6">
				<label class="form-label">
					<strong>No. motor</strong>
				</label>
				<input autocomplete="off" type="text" name="nmotor" class="form-control" placeholder="Ingrese número de motor" required/>
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
				<select class="form-control mb-3" required="required" name="cobertura">
					<option disabled selected>Selecciona una opción</option>
					<option>MULTIPLATAFORMAS CD JUAREZ</option>
					<option>COTIZACION PARTICULAR RC ECONOMICA CON GRUA</option>
					<option>AMPLIA AUTOMOVIL PARTICULAR HASTA $50,000</option>
					<option>VEHICULO PARTICULAR AMPLIA HASTA $60,000</option>
					<option>AMPLIA AUTOMOVIL PARTICULAR HASTA $70,000</option>
					<option>AMPLIA AUTOMOVIL PARTICULAR HASTA $80,000</option>
					<option>POLIZA PARTICULAR AMPLIA 90 MIL</option>
					<option>POLIZA PARTICULAR AMPLIA 100 MIL</option>
					<option>POLIZA PARTICULAR AMPLIA 110 MIL</option>
					<option>POLIZA PARTICULAR AMPLIA 120 MIL</option>
					<option>POLIZA PARTICULAR AMPLIA 130 MIL</option>
					<option>POLIZA PARTICULAR AMPLIA 140 MIL</option>
					<option>TERCEROS CON GRUA PICKUP</option>
					<option>AMPLIA PICKUP HASTA $50,000</option>
					<option>AMPLIA PICKUP HASTA $60,000</option>
					<option>AMPLIA PICKUP HASTA $70,000</option>
					<option>AMPLIA PICKUP HASTA $80,000</option>
					<option>AMPLIA PICKUP HASTA $90,000</option>
					<option>AMPLIA PICKUP HASTA $100,000</option>
					<option>AMPLIA PICKUP HASTA $110,000</option>
					<option>AMPLIA PICKUP HASTA $120,000</option>
					<option>AMPLIA PICKUP HASTA $130,000</option>
					<option>AMPLIA PICKUP HASTA $140,000</option>
					<option>AMPLIA MOTO</option>
					<option>INTERMEDIA MOTO</option>
					<option>TERCEROS MOTO</option>
					<option>COTIZACION MULTIPLATAFORMAS PROMO JULIO 2021</option>
					<option>COTIZACION POLIZA MULTIPLATAFORMAS 4 MILLONES EN RC</option>
					<option>MULTIPLATAFORMAS ECONOMICA</option>
				</select>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Deducible</strong>
				</label>
				<select class="form-control mb-3" required="required" name="deducible" >
					<option disabled selected>Selecciona una opción</option>
					<option>Sí aplica</option>
					<option>No aplica</option>
				</select>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Costo total</strong>
				</label>
				<input autocomplete="off" type="text" name="costo_total" class="form-control" placeholder="Ingrese la cantidad" required/>
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
				<input autocomplete="off" type="number" name="pagoinicial" class="form-control" placeholder="Ingrese la cantidad" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Pago mensual</strong>
				</label>
				<input autocomplete="off" type="number" name="pagomensual" class="form-control" placeholder="Ingrese el monto mensual" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Plazo</strong>
				</label>
				<input autocomplete="off" type="text" name="plazo" class="form-control" placeholder="Ingrese la fecha" required/>
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
