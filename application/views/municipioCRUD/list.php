<div class="card">
  <div class="card-header">
    <a class="btn btn-success" href="<?php echo base_url('municipioCRUD/create') ?>"> Agregar Municipio</a>
  </div>
  <br/>
  <div class="card-body">
    <table id="datatables-reponsive" class="table table-striped" style="width:100%">
      <thead>
          <tr>
              <th style="width:40%;">Description</th>
              <th style="width:25%">Acción</th>
          </tr>
      </thead>
      <tbody>
      <?php foreach ($data as $municipio) { ?>      
          <tr>
              <td><?php echo $municipio->descripcion; ?></td>          
          <td>
            <form method="DELETE" action="<?php echo base_url('municipioCRUD/delete/'.$municipio->id);?>">
              <a class="btn btn-info" href="<?php echo base_url('municipioCRUD/'.$municipio->id); ?>">
                <!--<i class="align-middle" data-feather="eye"></i>-->
                Mostrar
              </a>
              <a class="btn btn-primary" href="<?php echo base_url('municipioCRUD/edit/'.$municipio->id); ?>">
                <!--<i class="align-middle" data-feather="edit-2"></i>-->
                Editar
              </a>
              <!--<button type="submit" class="btn btn-danger">
                <i class="align-middle" data-feather="trash"></i>
              </button>-->
            </form>
          </td>     
          </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
</div>