<div class="card">
  <div class="card-header">
    <a class="btn btn-success" href="<?php echo base_url('coberturaCRUD/create') ?>"> Agregar cobertura</a>
  </div>
  <br/>
  <div class="card-body">
    <table id="datatables-reponsive" class="table table-striped" style="width:100%">
      <thead>
          <tr>
              <th style="width:20%;">Cobertura</th>
              <th style="width:10%;">RCA</th>
              <th style="width:10%;">Robo</th>
              <th style="width:10%;">Daño</th>
              <th style="width:10%;">Gastos</th>
              <th style="width:10%;">Médico</th>
              <th style="width:10%;">Acción</th>
          </tr>
      </thead>
      <tbody>
      <?php foreach ($data as $cobertura) { ?>      
          <tr>
              <td><?php echo $cobertura->cobertura; ?></td>
              <td><?php echo $cobertura->rca; ?></td>
              <td><?php echo $cobertura->robo; ?></td>
              <td><?php echo $cobertura->dano; ?></td>
              <td><?php echo $cobertura->gastos; ?></td>
              <td><?php echo $cobertura->asistencia; ?></td>
              <td>
                <form method="DELETE" action="<?php echo base_url('coberturaCRUD/delete/'.$cobertura->id);?>">
                  <a class="btn btn-info" href="<?php echo base_url('coberturaCRUD/'.$cobertura->id); ?>">
                    Mostrar
                  </a>
                  <a class="btn btn-primary" href="<?php echo base_url('coberturaCRUD/edit/'.$cobertura->id); ?>">
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