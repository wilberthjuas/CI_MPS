<div class="card">
    <div class="card-header">
        <a class="btn btn-success" href="<?php echo base_url('coberturaCRUD'); ?>"> Regresar</a>
    </div>
    <br/>
    <div class="card-body">
        <form method="post" action="<?php echo base_url('coberturaCRUDCreate');?>">
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
                <input autocomplete="off" type="text" name="cobertura" class="form-control" required/>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa la prima de RCA</strong>
                </label>
                <input autocomplete="off" type="text" name="rca" class="form-control" required/>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa la prima de Robo</strong>
                </label>
                <input autocomplete="off" type="text" name="robo" class="form-control" required/>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa la prima de Daño</strong>
                </label>
                <input autocomplete="off" type="text" name="dano" class="form-control" required/>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa la prima de Gastos</strong>
                </label>
                <input autocomplete="off" type="text" name="gastos" class="form-control" required/>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa la prima de Médico</strong>
                </label>
                <input autocomplete="off" type="text" name="medico" class="form-control" required/>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa la prima de Asistencia</strong>
                </label>
                <input autocomplete="off" type="text" name="asistencia" class="form-control" required/>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa la prima de Cristal</strong>
                </label>
                <input autocomplete="off" type="text" name="cristal" class="form-control" required/>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa la prima de Vial</strong>
                </label>
                <input autocomplete="off" type="text" name="vial" class="form-control" required/>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    <strong>Ingresa la prima de Muerte</strong>
                </label>
                <input autocomplete="off" type="text" name="muerte" class="form-control" required/>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button> 
        </form>
    </div>
</div>