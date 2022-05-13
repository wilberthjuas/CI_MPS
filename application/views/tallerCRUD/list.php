<div class="card-body">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <a class="btn btn-success" href="<?php echo base_url('tallerCRUD/create') ?>"> Agregar Taller</a>
      </div>
      <br/>
      <div class="card-body">
        <table id="datatables-reponsive" class="table table-striped" style="width:100%;">
          <thead>
              <tr>
                  <th style="width:20%;">Nombre</th>
                  <th style="width:10%">Teléfono</th>
                  <th style="width:10%">Direccion</th>
                  <th style="width:10%">Municipio</th>
                  <th style="width:10%">Acción</th>
              </tr>
          </thead>
          <tbody>
          <?php foreach ($data as $taller) { ?>      
              <tr>
                  <td><?php echo $taller->nombre; ?></td>
                  <td><?php echo $taller->telefono; ?></td>
                  <td><?php echo $taller->direccion; ?></td>
                  <td><?php echo $taller->municipio; ?></td>
              <td>
                <form method="DELETE" action="<?php echo base_url('tallerCRUD/delete/'.$taller->id);?>">
                  <a class="btn btn-info" href="<?php echo base_url('tallerCRUD/'.$taller->id); ?>">
                    <!--<i class="align-middle" data-feather="eye"></i>-->
                    Mostrar
                  </a>
                  <a class="btn btn-primary" href="<?php echo base_url('tallerCRUD/edit/'.$taller->id); ?>">
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