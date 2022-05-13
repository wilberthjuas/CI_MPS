<div class="card">
  <div class="card-header">
    <a class="btn btn-success" href="<?php echo base_url('emergenciaCRUD'); ?>"> Regresar</a>
  </div>
  <br/>
  <table class="table table-bordered">
    <thead>
        <tr>
            <th style="width:10%;">Nombre</th>
            <th style="width:10%;">Teléfono</th>
            <th style="width:10%;">Sucursal</th>
            <th style="width:10%;">Teléfono 2</th>
            <th style="width:10%;">Descripción</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $emergencia->nombre; ?></td>          
            <td><?php echo $emergencia->telefono; ?></td>
            <td><?php echo $emergencia->sucursal; ?></td>
            <td><?php echo $emergencia->telefono2; ?></td>
            <td><?php echo $emergencia->descripcion; ?></td>
        </tr>
    </tbody>
  </table>
</div>