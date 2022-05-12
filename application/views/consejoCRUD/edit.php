<div class="card">	
	<div class="card-header">
		<a class="btn btn-success" href="<?php echo base_url('consejoCRUD');?>"> Regresar</a>
	</div>
	<div class="card-body">
		<form method="post" action="<?php echo base_url('consejoCRUD/update/'.$consejo->id);?>">
			<?php
			if ($this->session->flashdata('errors')){
			    echo '<div class="alert alert-danger">';
			    echo $this->session->flashdata('errors');
			    echo "</div>";
			}
			?>
			<div class="mb-3">
				<label class="form-label">
					<strong>Título</strong>
				</label>
				<input autocomplete="off" type="text" name="titulo" class="form-control" value="<?php echo $consejo->titulo; ?>" required/>
			</div>
			<div class="mb-3">
				<label class="form-label">
					<strong>Descripción</strong>
				</label>
				<input autocomplete="off" type="textarea" name="description" class="form-control" value="<?php echo $consejo->descripcion; ?>" required/>
			</div>
			<button type="submit" class="btn btn-primary">Enviar</button> 
		</form>
	</div>
</div>