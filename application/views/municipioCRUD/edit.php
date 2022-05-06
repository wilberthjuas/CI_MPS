<div class="card">	
	<div class="card-header">
		<a class="btn btn-success" href="<?php echo base_url('municipioCRUD');?>"> Regresar</a>
	</div>
	<div class="card-body">
		<form method="post" action="<?php echo base_url('municipioCRUD/update/'.$municipio->id);?>">
			<?php
			if ($this->session->flashdata('errors')){
			    echo '<div class="alert alert-danger">';
			    echo $this->session->flashdata('errors');
			    echo "</div>";
			}
			?>
			<div class="mb-3">
				<label class="form-label">
					<strong>Descripción</strong>
				</label>
				<input autocomplete="off" type="text" name="description" class="form-control" value="<?php echo $municipio->descripcion; ?>" required/>
			</div>
			

			<button type="submit" class="btn btn-primary">Enviar</button> 
		</form>
	</div>
</div>