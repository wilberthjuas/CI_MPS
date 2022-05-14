<div class="card">
    <div class="card-header">
        <a class="btn btn-success" href="<?php echo base_url('vendedorCRUD'); ?>"> Regresar</a>
    </div>
    <br/>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width:10%">#</th>
                    <th style="width:40%;">Nombre</th>
                    <th style="width:25%;">Teléfono</th>
                    <th style="width:25%;">Correo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $vendedor->id; ?></td>          
                    <td><?php echo $vendedor->nombre; ?></td>
                    <td><?php echo $vendedor->telefono; ?></td>
                    <td><?php echo $vendedor->correo; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>