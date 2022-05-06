<div class="card">	
	<div class="card-header">
		<a class="btn btn-success" href="<?php echo base_url('cobradorCRUD');?>"> Regresar</a>
	</div>
	<div class="card-body">
		<form method="post" action="<?php echo base_url('cobradorCRUD/update/'.$cobrador->id);?>">
			<?php
			if ($this->session->flashdata('errors')){
			    echo '<div class="alert alert-danger">';
			    echo $this->session->flashdata('errors');
			    echo "</div>";
			}
			?>
			<div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa el nuevo cobrador</strong>
                </label>
                <input type="text" name="name" class="form-control" value="<?php echo $cobrador->nombre; ?>" required/>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa el teléfono</strong>
                </label>
                <input type="text" name="phone" class="form-control" value="<?php echo $cobrador->telefono; ?>" required/>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa el correo</strong>
                </label>
                <input type="email" name="email" class="form-control" value="<?php echo $cobrador->correo; ?>" required/>
            </div>
			

			<button type="submit" class="btn btn-primary">Enviar</button> 
		</form>
	</div>
</div>