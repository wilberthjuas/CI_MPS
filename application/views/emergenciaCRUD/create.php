<div class="card">
    <div class="card-header">
        <a class="btn btn-success" href="<?php echo base_url('emergenciaCRUD'); ?>"> Regresar</a>
    </div>
    <br/>
    <div class="card-body">
        <form method="post" action="<?php echo base_url('emergenciaCRUDCreate');?>">
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
                    <input autocomplete="off" type="text" name="nombre" class="form-control" maxlength="250" required/>
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label">
                        <strong>Teléfono</strong>
                    </label>
                    <input autocomplete="off" type="text" name="telefono1" class="form-control" maxlength="20" required/>
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label">
                        <strong>Teléfono 2</strong>
                    </label>
                    <input autocomplete="off" type="text" name="telefono2" class="form-control" maxlength="20"/>
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
                        <option value="<?php echo $sucursal->id; ?>"><?php echo $sucursal->nombre; ?></option>
                        <?php } ?> 
                    </select>
                </div>
                <div class="mb-3 col-md-8">
                    <label class="form-label">
                        <strong>Descripción</strong>
                    </label>
                    <input autocomplete="off" type="text" name="descripcion" class="form-control" maxlength="400"/>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button> 
        </form>
    </div>
</div>