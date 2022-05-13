<div class="card-body">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <a class="btn btn-success" href="<?php echo base_url('emergenciaCRUD/create') ?>"> Agregar emergencia</a>
      </div>
      <br/>
      <div class="card-body">
        <table id="datatables-reponsive" class="table table-striped" style="width:100%;">
          <thead>
              <tr>
                  <th style="width:20%;">Nombre</th>
                  <th style="width:10%">Teléfono</th>
                  <th style="width:10%">Sucursal</th>
                  <th style="width:10%">Descripcion</th>
                  <th style="width:10%">Acción</th>
              </tr>
          </thead>
          <tbody>
          <?php foreach ($data as $emergencia) { ?>      
              <tr>
                  <td><?php echo $emergencia->nombre; ?></td>
                  <td><?php echo $emergencia->telefono; ?></td>
                  <td><?php echo $emergencia->sucursal; ?></td>
                  <td><?php echo $emergencia->descripcion; ?></td>
              <td>
                <form method="DELETE" action="<?php echo base_url('emergenciaCRUD/delete/'.$emergencia->id);?>">
                  <a class="btn btn-info" href="<?php echo base_url('emergenciaCRUD/'.$emergencia->id); ?>">
                    <!--<i class="align-middle" data-feather="eye"></i>-->
                    Mostrar
                  </a>
                  <a class="btn btn-primary" href="<?php echo base_url('emergenciaCRUD/edit/'.$emergencia->id); ?>">
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
  </div>
</div>