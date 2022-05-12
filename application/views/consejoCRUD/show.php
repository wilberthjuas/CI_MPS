<div class="card">
  <div class="card-header">
    <a class="btn btn-success" href="<?php echo base_url('consejoCRUD'); ?>"> Regresar</a>
  </div>
  <br/>
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
            <td><?php echo $consejo->id; ?></td>       
            <td><?php echo $consejo->titulo; ?></td>
            <td><?php echo $consejo->descripcion; ?></td>          
        </tr>
    </tbody>
  </table>
</div>