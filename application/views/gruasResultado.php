<?php foreach( $result1 as $row){
    $poliza     = $row['folio'];
    $nombre     = $row['nombre'];
    $direccion  = $row['domicilio'].' '.$row['exterior'];
    $colonia    = $row['col'];
    $municipio  = $row['municipio'];
    $telefono   = $row['tel'];

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

    $grua1 = $row['com1'];
    $grua2 = $row['com2'];
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

  <form method="post" action="<?=$url?>gruas/setGrua">
    <div class="row">
      <div class="mb-3 col-md-4">
        <label class="form-label"><strong>Grua 1</strong></label>
        <input autocomplete="off" type="text" name="com1" class="form-control" value="<?php echo $grua1; ?>"  
        <?php if (strlen($grua1) > 0){ ?>readonly<?php } ?>/>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label"><strong>Grua 2</strong></label>
        <input autocomplete="off" type="text" name="com2" class="form-control" value="<?php echo $grua2; ?>" 
        <?php if (strlen($grua2) > 0){ ?>readonly<?php } ?>/>
      </div>
    </div>  
    <input type="hidden" name="folio" value="<?php echo $poliza; ?>">
    <button type="submit" class="btn btn-primary" <?php if (strlen($grua1) > 0 && strlen($grua2) > 0){ ?>disabled<?php } ?>>Guardar Cambios</button> 
  </form>
</div>