<?php foreach( $result1 as $row){
    $poliza     = $row['folio'];
    $nombre     = $row['nombre'];
    $direccion  = $row['domicilio'].' '.$row['exterior'];
    $colonia    = $row['colonia'];
    $municipio  = $row['municipio'];
    $telefono   = $row['telefono'];

    $vehiculo = $row['tipo'];
    $serie    = $row['serie'];
    $motor    = $row['nmotor'];
    $placas   = $row['placas'];

    $cobertura    = $row['cobertura'];
    $fecha        = $row['expedicion'];
    $anoPoliza    = $row['ano2'];
    $abonoMensual = $row['pagomensual'];
    $vendedor     = $row['vendedor'];
    $cobrador     = $row['cobrador'];

    //$grua1 = $row['com1'];
    //$grua2 = $row['com2'];
  }

?>  

<div class="card-body">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Datos Cliente</h5>
        <h6 class="card-subtitle text-muted">
          <?php 
            error_reporting(0);
            $hoy= date("Y-m-d");
            echo $hoy;
          ?>
        </h6>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Póliza</th>
              <th scope="col">Nombre</th>
              <th scope="col">Dirección</th>
              <th scope="col">Colonia</th>
              <th scope="col">Municipio</th>
              <th scope="col">Teléfono</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $poliza; ?></td>
              <td><?php echo $nombre; ?></td>
              <td><?php echo $direccion; ?></td>
              <td><?php echo $colonia;?></td>
              <td><?php echo $municipio; ?></td>
              <td><?php echo $telefono; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Datos Vehículo</h5>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Vehiculo</th>
              <th scope="col">No. Serie</th>
              <th scope="col">No. Motor</th>
              <th scope="col">Placas</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $vehiculo; ?></td>
              <td><?php echo $serie; ?></td>
              <td><?php echo $motor; ?></td>
              <td><?php echo $placas; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Datos Póliza</h5>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Cobertura</th>
              <th scope="col">Fecha</th>
              <th scope="col">Año de la póliza</th>
              <th scope="col">Abono mensual</th>
              <th scope="col">Vendedor</th>
              <th scope="col">Cobrador</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $cobertura; ?></td>
              <td><?php echo $fecha; ?></td>
              <td><?php echo $anoPoliza; ?></td>
              <td><?php echo $abonoMensual; ?></td>
              <td><?php echo $vendedor; ?></td>
              <td><?php echo $cobrador; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Gruas</h5>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Grua</th>
            </tr>
          </thead>
          <tbody>
            <?php 
                $cont = 0;
                foreach( $gruas as $grua){
                  $cont++;
            ?>
            <tr>
              <td><?php echo $cont; ?></td>
              <td><?php echo $grua['comentario']; ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <?php if($cont < 2){ ?>
  <div class="card">
    <div class="card-body">
      <form method="post" action="<?=$url?>gruas/setGrua">
        <div class="row">
          <div class="mb-3 col-md-4">
            <label class="form-label"><strong>Agregar Grua</strong></label>
            <input autocomplete="off" type="text" name="com" class="form-control" required/>
          </div>
          <input type="hidden" name="folio" value="<?php echo $poliza; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button> 
      </form>
    </div>
  </div>
  <?php } ?>
</div>