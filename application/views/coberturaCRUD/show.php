<div class="card">
  <div class="card-header">
    <a class="btn btn-success" href="<?php echo base_url('coberturaCRUD'); ?>"> Regresar</a>
  </div>
  <br/>
  <table class="table table-bordered">
    <thead>
        <tr>
            <th>Cobertura</th>
            <th>RCA</th>
            <th>Robo</th>
            <th>Daño</th>
            <th>Gastos</th>
            <th>Médico</th>
            <th>Asistencia</th>
            <th>Cristal</th>
            <th>Vial</th>
            <th>Muerte</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $cobertura->cobertura; ?></td>          
            <td><?php echo $cobertura->rca; ?></td>
            <td><?php echo $cobertura->robo; ?></td>
            <td><?php echo $cobertura->dano; ?></td>
            <td><?php echo $cobertura->gastos; ?></td>
            <td><?php echo $cobertura->medico; ?></td>
            <td><?php echo $cobertura->asistencia; ?></td>
            <td><?php echo $cobertura->cristal; ?></td>
            <td><?php echo $cobertura->vial; ?></td>
            <td><?php echo $cobertura->muerte; ?></td>
        </tr>
    </tbody>
  </table>
</div>