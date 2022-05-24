<div class="card">
    <div class="card-header">
        <a class="btn btn-success" href="<?php echo base_url('vendedorCRUD'); ?>"> Regresar</a>
    </div>
    <br/>
    <div class="card-body">
        <form method="post" action="<?php echo base_url('vendedorCRUDCreate');?>">
            <?php
            if ($this->session->flashdata('errors')){
                echo '<div class="alert alert-danger">';
                echo $this->session->flashdata('errors');
                echo "</div>";
            }
            ?>
            <div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa el nuevo vendedor</strong>
                </label>
                <input autocomplete="off" type="text" name="name" class="form-control" required/>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa el teléfono</strong>
                </label>
                <input autocomplete="off" type="text" name="phone" class="form-control" required/>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa el correo</strong>
                </label>
                <input autocomplete="off" type="email" name="email" class="form-control"/>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button> 
        </form>
    </div>
</div>