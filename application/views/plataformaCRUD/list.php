<div class="card">

  <div class="card-header">
    <a class="btn btn-success" href="<?php echo base_url('PlataformaCRUD/create') ?>"> Agregar Plataforma</a>
  </div>
  
  <br/>

  <table class="table table-bordered">
    <thead>
        <tr>
            <th style="width:40%;">Description</th>
            <th style="width:25%">Acción</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $plataforma) { ?>      
        <tr>
            
            <td><?php echo $plataforma->descripcion; ?></td>          
        <td>
          <form method="DELETE" action="<?php echo base_url('plataformaCRUD/delete/'.$plataforma->id);?>">
            <a class="btn btn-info" href="<?php echo base_url('plataformaCRUD/'.$plataforma->id); ?>">
              Mostrar
            </a>
            <a class="btn btn-primary" href="<?php echo base_url('plataformaCRUD/edit/'.$plataforma->id); ?>">
              <i class="align-middle" data-feather="edit-2"></i>
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