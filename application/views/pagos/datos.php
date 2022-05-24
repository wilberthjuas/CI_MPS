<?php
$resultado = "";

foreach( $result1 as $row){
  $status     = $row['bit'] == 0 ? 'Activa':'Cancelada';
  $poliza     = $row['folio'];
  $nombre     = $row['nombre'];
  $direccion  = $row['domicilio'].' '.$row['exterior'];
  $colonia    = $row['colonia'];
  $municipio  = $row['municipio'];
  $telefono   = $row['telefono'];

  $vehiculo     = $row['tipo'];
  $serie        = $row['serie'];
  $motor        = $row['nmotor'];
  $placas       = $row['placas'];

  $cobertura    = $row['cobertura'];
  $fecha        = $row['expedicion'];
  $anoPoliza    = $row['ano2'];
  $abonoMensual = $row['pagomensual'];
  $vendedor     = $row['vendedor'];
  $cobrador     = $row['cobrador'];

  

}
?>  

<div class="card-body">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Datos Cliente</h5>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col"><strong>STATUS</strong></th>
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
              <td><?php echo $status; ?></td>
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
        <h5 class="card-title">Pagos</h5>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Status</th>
              <th scope="col">Folio</th>
              <th scope="col">Cobrador</th>
              <th scope="col">Monto</th>
              <th scope="col">Fecha</th>
              <th scope="col">Recibo</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($pagos as $pago ){ ?>
            <tr>
              <td><?php echo $pago['num_pago']; ?></td>
              <td><?php echo $pago['estatus']; ?></td>
              <td><?php echo $pago['folio']; ?></td>
              <td><?php echo $pago['cobrador']; ?></td>
              <td>$<?php echo $pago['monto']; ?></td>
              <td><?php echo $pago['fecha']; ?></td>
              <td><?php echo $pago['recibo']; ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <form method="post" action="<?=$url?>registro/pagos">
          <div class="row">
            <div class="mb-3 col-md-2">
              <label class="form-label"><strong>Pago</strong></label>
              <select class="form-control mb-3"name="pag" required>
                <option value="">Seleccione...</option>
                <option value="Pagado">Pagado</option>
              </select>
            </div>
            <div class="mb-3 col-md-2">
              <label class="form-label"><strong>Folio</strong></label>
              <input autocomplete="off" type="text" name="fol" class="form-control"  placeholder="Ingrese folio de cobro" required />
            </div>
            <div class="mb-3 col-md-3">
              <label class="form-label">
                <strong>
                  Cobrador 
                </strong>
              </label>
              <select class="form-control mb-3" name="cob" required>
                <option value="" disabled selected>Selecciona una opción</option>
                <?php foreach( $cobradores as $cobrador){ ?>
                <option value="<?php echo $cobrador->nombre; ?>"><?php echo $cobrador->nombre; ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="mb-3 col-md-2">
              <label class="form-label"><strong>Monto</strong></label>
              <input autocomplete="off" type="text" name="mon" class="form-control" data-mask="$99999999999"  placeholder="Ingrese monto" required />
            </div>
            <div class="mb-3 col-md-2">
              <label class="form-label"><strong>Fecha del recibo</strong></label>
              <input autocomplete="off" type="date" name="re" class="form-control" required />
            </div>
          </div>

          <input  type="hidden" name="folio" value="<?php echo $poliza; ?>"  />
          <button type="submit" class="btn btn-primary">Guardar Cambios</button> 
        </form>
      </div>
    </div>
  </div>  
</div>