<div class="card">	
	<div class="card-header">
		<a class="btn btn-success" href="<?php echo base_url('coberturaCRUD');?>"> Regresar</a>
	</div>
	<div class="card-body">
		<form method="post" action="<?php echo base_url('coberturaCRUD/update/'.$cobertura->id);?>">
			<?php
			if ($this->session->flashdata('errors')){
			    echo '<div class="alert alert-danger">';
			    echo $this->session->flashdata('errors');
			    echo "</div>";
			}
			?>
			<div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa la nueva cobertura</strong>
                </label>
                <input autocomplete="off" type="text" name="cobertura" class="form-control" value="<?php echo $cobertura->cobertura; ?>" required/>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa la prima de RCA</strong>
                </label>
                <input autocomplete="off" type="text" name="rca" class="form-control" value="<?php echo $cobertura->rca; ?>" required/>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa la prima de Robo</strong>
                </label>
                <input autocomplete="off" type="text" name="robo" class="form-control" value="<?php echo $cobertura->robo; ?>" required/>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa la prima de Daño</strong>
                </label>
                <input autocomplete="off" type="text" name="dano" class="form-control" value="<?php echo $cobertura->dano; ?>" required/>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa la prima de Gastos</strong>
                </label>
                <input autocomplete="off" type="text" name="gastos" class="form-control" value="<?php echo $cobertura->gastos; ?>" required/>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa la prima de Médico</strong>
                </label>
                <input autocomplete="off" type="text" name="medico" class="form-control" value="<?php echo $cobertura->medico; ?>" required/>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa la prima de Asistencia</strong>
                </label>
                <input autocomplete="off" type="text" name="asistencia" class="form-control" value="<?php echo $cobertura->asistencia; ?>" required/>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa la prima de Cristal</strong>
                </label>
                <input autocomplete="off" type="text" name="cristal" class="form-control" value="<?php echo $cobertura->cristal; ?>" required/>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa la prima de Vial</strong>
                </label>
                <input autocomplete="off" type="text" name="vial" class="form-control" value="<?php echo $cobertura->vial; ?>" required/>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa la prima de Muerte</strong>
                </label>
                <input autocomplete="off" type="text" name="muerte" class="form-control" value="<?php echo $cobertura->muerte; ?>" required/>
            </div>
			
			<button type="submit" class="btn btn-primary">Enviar</button> 
		</form>
	</div>
</div>