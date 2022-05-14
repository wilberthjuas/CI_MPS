<div class="card">	
	<div class="card-header">
		<a class="btn btn-success" href="<?php echo base_url('promocionCRUD');?>"> Regresar</a>
	</div>
	<div class="card-body">
		<form method="post" action="<?php echo base_url('promocionCRUD/update/'.$promocion->id);?>">
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
                        <strong>Título</strong>
                    </label>
                    <input autocomplete="off" type="text" name="titulo" class="form-control" value="<?php echo $promocion->titulo; ?>" required/>
                </div>
                <div class="mb-3 col-md-8">
                    <label class="form-label">
                        <strong>Descripción</strong>
                    </label>
                    <input autocomplete="off" type="text" name="description" class="form-control" value="<?php echo $promocion->descripcion; ?>" required/>
                </div>    
            </div>
            <div class="row">
                <div class="mb-3 col-md-4">
                    <label class="form-label">
                        <strong>Banner</strong>
                    </label>
                    <input type="file" name="banner" class="form-control" required multiple/>
                </div>
            </div>
			

			<button type="submit" class="btn btn-primary">Enviar</button> 
		</form>
	</div>
</div>