<div class="card">
    <div class="card-header">
        <a class="btn btn-success" href="<?php echo base_url('sucursalCRUD'); ?>"> Regresar</a>
    </div>
    <br/>
    <div class="card-body">
        <form method="post" action="<?php echo base_url('sucursalCRUDCreate');?>">
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
                <div class="mb-3 col-md-8">
                    <label class="form-label">
                        <strong>Descripción</strong>
                    </label>
                    <input autocomplete="off" type="text" name="descripcion" class="form-control" maxlength="400"/>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-4">
                    <label class="form-label">
                        <strong>Dirección</strong>
                    </label>
                    <input autocomplete="off" type="text" name="direccion" class="form-control" maxlength="250" required/>
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label">
                        <strong>Colonia</strong>
                    </label>
                    <input autocomplete="off" type="text" name="colonia" class="form-control" maxlength="100" required/>
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label">
                        <strong>Municipio</strong>
                    </label>
                    <input autocomplete="off" type="text" name="municipio" class="form-control" maxlength="100" required/>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-4">
                    <label class="form-label">
                        <strong>Estado</strong>
                    </label>
                    <select class="form-control" name="estado" required>
                        <option value="" disabled selected>Selecciona una opción</option>
                        <?php foreach( $estados as $estado){ ?>
                        <option value="<?php echo $estado->id; ?>"><?php echo $estado->estado; ?></option>
                        <?php } ?> 
                    </select>
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label">
                        <strong>Código Postal</strong>
                    </label>
                    <input autocomplete="off" type="text" name="cp" class="form-control" pattern="[0-9]{5}" required/>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button> 
        </form>
    </div>
</div>