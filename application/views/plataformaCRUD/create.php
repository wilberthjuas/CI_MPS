<div class="card">
    <div class="card-header">
        <a class="btn btn-success" href="<?php echo base_url('plataformaCRUD'); ?>"> Regresar</a>
    </div>
    <br/>
    <div class="card-body">
        <form method="post" action="<?php echo base_url('plataformaCRUDCreate');?>">
            <?php
            if ($this->session->flashdata('errors')){
                echo '<div class="alert alert-danger">';
                echo $this->session->flashdata('errors');
                echo "</div>";
            }
            ?>
            <div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa la nueva plataforma</strong>
                </label>
                <input autocomplete="off" type="text" name="description" class="form-control" placeholder="Ej: Multi" required/>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button> 
        </form>
    </div>
</div>
