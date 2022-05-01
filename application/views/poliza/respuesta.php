<div class="card">
	<div class="card-body">
		<form method="post" name="registrar" action="<?=$url?>">
			<div class="mb-3">
				<p class="titulo-form"><?php if($id != false) { echo "REGISTRO EXITOSO"; }else{ echo "FALLO AL INSERTAR REGISTRO";} ?></p>
			</div>
			<button type="submit" class="btn btn-primary">Regresar</button> 
		</form>	
	</div>
</div>