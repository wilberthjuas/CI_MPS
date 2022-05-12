<div class="card">
    <div class="card-header">
        <a class="btn btn-success" href="<?php echo base_url('consejoCRUD'); ?>"> Regresar</a>
    </div>
    <br/>
    <div class="card-body">
        <form method="post" action="<?php echo base_url('consejoCRUDCreate');?>">
            <?php
            if ($this->session->flashdata('errors')){
                echo '<div class="alert alert-danger">';
                echo $this->session->flashdata('errors');
                echo "</div>";
            }
            ?>
            <div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa el título</strong>
                </label>
                <input autocomplete="off" type="text" name="titulo" class="form-control" maxlength="255" required/>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    <strong>Consejo</strong>
                </label>
                <input autocomplete="off" type="textarea" name="description" class="form-control" required/>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button> 
        </form>
    </div>
</div>