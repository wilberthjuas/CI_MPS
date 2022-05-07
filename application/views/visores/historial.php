<div class="card-body">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Información del asegurado</h5>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="datatables-reponsive" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th scope="col">Póliza</th>
                <th scope="col">Nombre</th>
                <th scope="col">Domicilio</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Marca</th>
                <th scope="col">Vehiculo</th>
                <th scope="col">Placas</th>
                <th scope="col">Serie</th>
                <th scope="col">Año</th>
                <th scope="col">Expedición</th>
                <th scope="col">Status</th>
                <th scope="col">Comentarios</th>
                <th scope="col">Cobertura</th>
                <th scope="col">Vendedor</th>
                <th scope="col">Municipio</th>
                <th scope="col">Cobrador</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach( $result1 as $row ){
                ?>
                <tr>
                  <td><?php echo $row['folio'] ?></td>
                  <td><?php echo $row['nombre'] ?></td>
                  <td><?php echo $row['domicilio'].' '.$row['exterior'] ?></td>
                  <td><?php echo $row['tel'] ?></td>
                  <td><?php echo $row['marca'] ?></td>
                  <td><?php echo $row['tipo'] ?></td>
                  <td><?php echo $row['placas'] ?></td>
                  <td><?php echo $row['serie'] ?></td>
                  <td><?php echo $row['ano'] ?></td>
                  <td><?php echo $row['expedicion'] ?></td>
                  <td><?php if ($row['bit']==0){echo "Activa";}else {echo"Cancelada";}?></td>
                  <td><?php echo $row['mot'] ?></td>
                  <td><?php echo $row['cobertura'] ?></td>
                  <td><?php echo $row['vendedor'] ?></td>
                  <td><?php echo $row['municipio'] ?></td>
                  <td><?php echo $row['cobrador'] ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>