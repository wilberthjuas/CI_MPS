<div class="card-body">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <a class="btn btn-success" href="<?php echo base_url('qasCRUD/create') ?>"> Agregar 'Pregunta & Respuestas'</a>
      </div>
      <br/>
      <div class="card-body">
        <table id="datatables-reponsive" class="table table-striped" style="width:100%;">
          <thead>
              <tr>
                  <th style="width:5%">#</th>
                  <th style="width:30%;">Pregunta</th>
                  <th style="width:45%;">Respuesta</th>
                  <th style="width:20%">Acción</th>
              </tr>
          </thead>
          <tbody>
          <?php foreach ($data as $qas) { ?>      
              <tr>
                  <td><?php echo $qas->id; ?></td>
                  <td><?php echo $qas->pregunta; ?></td>
                  <td><?php echo $qas->respuesta; ?></td>
              <td>
                <form method="DELETE" action="<?php echo base_url('qasCRUD/delete/'.$qas->id);?>">
                  <a class="btn btn-info" href="<?php echo base_url('qasCRUD/'.$qas->id); ?>">
                    <!--<i class="align-middle" data-feather="eye"></i>-->
                    Mostrar
                  </a>
                  <a class="btn btn-primary" href="<?php echo base_url('qasCRUD/edit/'.$qas->id); ?>">
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