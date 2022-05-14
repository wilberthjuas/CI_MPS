<div class="card-body">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <a class="btn btn-success" href="<?php echo base_url('promocionCRUD/create') ?>"> Agregar promoción</a>
      </div>
      <br/>
      <div class="card-body">
        <table id="datatables-reponsive" class="table table-striped" style="width:100%;">
          <thead>
              <tr>
                <th style="width:40%;">Título</th>
                <th style="width:40%;">Descripción</th>
                <th style="width:20%">Acción</th>
              </tr>
          </thead>
          <tbody>
          <?php foreach ($data as $promocion) { ?>      
              <tr>
                  <td><?php echo $promocion->titulo; ?></td>
                  <td><?php echo $promocion->descripcion; ?></td>
              <td>
                <form method="DELETE" action="<?php echo base_url('promocionCRUD/delete/'.$promocion->id);?>">
                  <a class="btn btn-info" href="<?php echo base_url('promocionCRUD/'.$promocion->id); ?>">
                    <!--<i class="align-middle" data-feather="eye"></i>-->
                    Mostrar
                  </a>
                  <a class="btn btn-primary" href="<?php echo base_url('promocionCRUD/edit/'.$promocion->id); ?>">
                    <!--<i class="align-middle" data-feather="edit-2"></i>-->
                    Editar
                  </a>
                  <button type="submit" class="btn btn-danger">
                    <i class="align-middle" data-feather="trash"></i>
                  </button>
                </form>
              </td>     
              </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>