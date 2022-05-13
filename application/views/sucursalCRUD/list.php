<div class="card-body">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <a class="btn btn-success" href="<?php echo base_url('sucursalCRUD/create') ?>"> Agregar sucursal</a>
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
          <?php foreach ($data as $sucursal) { ?>      
              <tr>
                  <td><?php echo $sucursal->nombre; ?></td>
                  <td><?php echo $sucursal->telefono; ?></td>
                  <td><?php echo $sucursal->direccion; ?></td>
                  <td><?php echo $sucursal->municipio; ?></td>
              <td>
                <form method="DELETE" action="<?php echo base_url('sucursalCRUD/delete/'.$sucursal->id);?>">
                  <a class="btn btn-info" href="<?php echo base_url('sucursalCRUD/'.$sucursal->id); ?>">
                    <!--<i class="align-middle" data-feather="eye"></i>-->
                    Mostrar
                  </a>
                  <a class="btn btn-primary" href="<?php echo base_url('sucursalCRUD/edit/'.$sucursal->id); ?>">
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