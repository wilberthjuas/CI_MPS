<div class="card">	
	<div class="card-header">
		<a class="btn btn-success" href="<?php echo base_url('emergenciaCRUD');?>"> Regresar</a>
	</div>
	<div class="card-body">
		<form method="post" action="<?php echo base_url('emergenciaCRUD/update/'.$emergencia->id);?>">
			<?php
			if ($this->session->flashdata('errors')){
			    echo '<div class="alert alert-danger">';
			    echo $this->session->flashdata('errors');
			    echo "</div>";
			}
			?>
			<div class="row">
                <div class="mb-3 col-md-4">
                    <label class="form-label">
                        <strong>Nombre</strong>
                    </label>
                    <input autocomplete="off" type="text" name="nombre" class="form-control" maxlength="250" value="<?php echo $emergencia->nombre; ?>" required/>
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label">
                        <strong>Teléfono</strong>
                    </label>
                    <input autocomplete="off" type="text" name="telefono1" class="form-control" maxlength="20" value="<?php echo $emergencia->telefono; ?>"required/>
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label">
                        <strong>Teléfono 2</strong>
                    </label>
                    <input autocomplete="off" type="text" name="telefono2" class="form-control" maxlength="20" value="<?php echo $emergencia->telefono2; ?>"/>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-4">
                    <label class="form-label">
                        <strong>Sucursal</strong>
                    </label>
                    <select class="form-control" name="sucursal" >
                        <option value="" selected>Selecciona una opción</option>
                        <?php foreach( $Sucursales as $sucursal){ ?>
                        <option value="<?php echo $sucursal->id; ?>" <?php if($sucursal->id == $emergencia->id_sucursal){ echo 'selected';} ?>><?php echo $sucursal->nombre; ?></option>
                        <?php } ?> 
                    </select>
                </div>
                <div class="mb-3 col-md-8">
                    <label class="form-label">
                        <strong>Descripción</strong>
                    </label>
                    <input autocomplete="off" type="text" name="descripcion" class="form-control" maxlength="400" value="<?php echo $emergencia->descripcion; ?>"/>
                </div>
            </div>
            
			<button type="submit" class="btn btn-primary">Enviar</button> 
		</form>
	</div>
</div>