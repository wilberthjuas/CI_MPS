<div class="card">
  <div class="card-header">
    <a class="btn btn-success" href="<?php echo base_url('vendedorCRUD/create') ?>"> Agregar Vendedor</a>
  </div>
  <br/>
  <div class="card-body">
    <table id="datatables-reponsive" class="table table-striped" style="width:100%">
      <thead>
          <tr>
              <th style="width:40%;">Nombre</th>
              <th style="width:20%;">Teléfono</th>
              <th style="width:20%;">Correo</th>
              <th style="width:20%">Acción</th>
          </tr>
      </thead>
      <tbody>
      <?php foreach ($data as $vendedor) { ?>      
          <tr>
              <td><?php echo $vendedor->nombre; ?></td>
              <td><?php echo $vendedor->telefono; ?></td>
              <td><?php echo $vendedor->correo; ?></td>
              <td>
                <form method="DELETE" action="<?php echo base_url('vendedorCRUD/delete/'.$vendedor->id);?>">
                  <a class="btn btn-info" href="<?php echo base_url('vendedorCRUD/'.$vendedor->id); ?>">
                    <!--<i class="align-middle" data-feather="eye"></i>-->
                    Mostrar
                  </a>
                  <a class="btn btn-primary" href="<?php echo base_url('vendedorCRUD/edit/'.$vendedor->id); ?>">
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