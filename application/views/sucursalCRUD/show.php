<div class="card">
    <div class="card-header">
        <a class="btn btn-success" href="<?php echo base_url('sucursalCRUD'); ?>"> Regresar</a>
    </div>
    <br/>
    <div class="card-body">
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
                    <th style="width:10%;">Descripción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $sucursal->nombre; ?></td>          
                    <td><?php echo $sucursal->telefono; ?></td>
                    <td><?php echo $sucursal->direccion; ?></td>
                    <td><?php echo $sucursal->colonia; ?></td>
                    <td><?php echo $sucursal->municipio; ?></td>
                    <?php foreach ($estados as $estado) {
                        if($estado->id == $sucursal->estado){
                    ?>
                    <td><?php echo $estado->estado; ?></td>
                    <?php break;} } ?>
                    <td><?php echo $sucursal->cp; ?></td>
                    <td><?php echo $sucursal->telefono2; ?></td>
                    <td><?php echo $sucursal->descripcion; ?></td>
                </tr>
            </tbody>
          </table>
    </div>
</div>