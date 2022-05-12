<div class="card">	
	<div class="card-header">
		<a class="btn btn-success" href="<?php echo base_url('qasCRUD');?>"> Regresar</a>
	</div>
	<div class="card-body">
		<form method="post" action="<?php echo base_url('qasCRUD/update/'.$qas->id);?>">
			<?php
			if ($this->session->flashdata('errors')){
			    echo '<div class="alert alert-danger">';
			    echo $this->session->flashdata('errors');
			    echo "</div>";
			}
			?>
			<div class="mb-3">
				<label class="form-label">
					<strong>Pregunta</strong>
				</label>
				<input autocomplete="off" type="text" name="pregunta" class="form-control" value="<?php echo $qas->pregunta; ?>" required/>
			</div>
			<div class="mb-3">
				<label class="form-label">
					<strong>Respuesta</strong>
				</label>
				<input autocomplete="off" type="textarea" name="respuesta" class="form-control" value="<?php echo $qas->respuesta; ?>" required/>
			</div>

			<button type="submit" class="btn btn-primary">Enviar</button> 
		</form>
	</div>
</div>