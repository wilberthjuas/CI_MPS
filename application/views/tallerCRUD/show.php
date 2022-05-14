<div class="card">
    <div class="card-header">
        <a class="btn btn-success" href="<?php echo base_url('tallerCRUD'); ?>"> Regresar</a>
    </div>
    <br/>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width:10%;">Nombre</th>
                <th style="width:10%;">Teléfono</th>
                <th style="width:10%;">Dirección</th>
                <th style="width:10%;">Colonia</th>
                <th style="width:10%;">Municipio</th>
                <th style="width:10%;">Estado</th>
                <th style="width:10%;">Código Postal</th>
                <th style="width:10%;">Teléfono 2</th>
                <th style="width:10%;">Correo</th>
                <th style="width:10%;">Página</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $taller->nombre; ?></td>          
                <td><?php echo $taller->telefono; ?></td>
                <td><?php echo $taller->direccion; ?></td>
                <td><?php echo $taller->colonia; ?></td>
                <td><?php echo $taller->municipio; ?></td>
                <?php foreach ($estados as $estado) {
                    if($estado->id == $taller->estado){
                ?>
                <td><?php echo $estado->estado; ?></td>
                <?php break;} } ?>
                <td><?php echo $taller->cp; ?></td>
                <td><?php echo $taller->telefono2; ?></td>
                <td><?php echo $taller->correo; ?></td>
                <td><?php echo $taller->pagina; ?></td>
            </tr>
        </tbody>
      </table>
</div>