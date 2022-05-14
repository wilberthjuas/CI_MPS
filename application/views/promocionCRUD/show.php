<div class="card">
  <div class="card-header">
    <a class="btn btn-success" href="<?php echo base_url('promocionCRUD'); ?>"> Regresar</a>
  </div>
  <br/>
  <div class="card-body">
      <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width:25%">#</th>
                <th style="width:25%">Título</th>
                <th style="width:40%;">Descripción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $promocion->id; ?></td>
                <td><?php echo $promocion->titulo; ?></td>
                <td><?php echo $promocion->descripcion; ?></td>
            </tr>
        </tbody>
      </table>
      <br/>
      <img src="<?php echo base_url('uploads/'.$promocion->banner); ?>">
    </div>
</div>