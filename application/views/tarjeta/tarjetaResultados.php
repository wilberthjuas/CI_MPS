<?php

foreach($result1 as $row ){
    $poliza     = $row['folio'];
    $nombre     = $row['nombre'];
    $direccion  = $row['domicilio'].' '.$row['exterior'];
    $colonia    = $row['colonia'];
    $municipio  = $row['municipio'];
    $telefono   = $row['telefono'];
    $entre      = $row['entre'];

    $placas     = $row['placas'];
    $vehiculo   = $row['marca'].' '.$row['tipo'].' '.$row['color'].' '.$row['ano'];
    $expedicion = $row['expedicion'];
    $pagomensual= $row['pagomensual'];
    $cobertura  = $row['cobertura'];
    $vendedor   = $row['vendedor'];
    $cobrador   = $row['cobrador'];


  }
?> 

<div class="card-body">
  <div class="col-12">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Información del asegurado</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                          <th scope="col">Póliza</th>
                          <th scope="col">Fecha</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Domicilio</th>
                          <th scope="col">Cruces</th>
                          <th scope="col">Colonia</th>
                          <th scope="col">Municipio</th>
                          <th scope="col">Teléfono</th>
                          <th scope="col">Placas</th>
                          <th scope="col">Vehiculo</th>
                          <th scope="col">Abono</th>
                          <th scope="col">Cobertura</th>
                          <th scope="col">Vendedor</th>
                          <th scope="col">Cobrador</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $poliza; ?></td>
                            <td><?php echo $expedicion; ?></td>
                            <td><?php echo $nombre; ?></td>
                            <td><?php echo $direccion; ?></td>
                            <td><?php echo $entre; ?></td>
                            <td><?php echo $colonia; ?></td>
                            <td><?php echo $municipio; ?></td>
                            <td><?php echo $telefono; ?></td>
                            <td><?php echo $placas; ?></td>
                            <td><?php echo $vehiculo; ?></td>
                            <td><?php echo $pagomensual; ?></td>
                            <td><?php echo $cobertura; ?></td>
                            <td><?php echo $vendedor; ?></td>
                            <td><?php echo $cobrador; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <form>
                    <a class="btn btn-primary" href="<?=$url?>tarjeta/tarjetaPdf?n=<?php echo $poliza; ?>" target="_blank">Descargar PDF</a> 
                </form>
            </div>
        </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card">
        <div class="card-body">
            <form name="tarjeta" action="<?=$url?>tarjeta/updateTable" method="post">
                <input type="hidden" name="folio" value=" <?php echo $poliza; ?>" />
                <div class="table-responsive">
                    <table class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                              <th scope="col">FECHA</th>
                              <th scope="col">NOTA o COMENTARIO</th>
                              <th scope="col">ABONO</th>
                              <th scope="col">SALDO</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $cont = 0;
                            foreach($pagos as $pago ){ ?>
                            <tr>
                                <input type="hidden" name="id[]" value="<?php echo $pago['id']; ?>">
                                <td>
                                    <input type="text" class="form-control" name="fecha[]" value="<?php echo date("Y-m-d",strtotime($pagos[0]['fecha']."+ ".$cont." month")); ?>">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="" readonly>
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="monto[]" data-mask="$99999999999"  value="<?php echo $pago['monto']; ?>">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="" readonly>
                                </td>
                            </tr>
                            <?php $cont++; } ?>
                        </tbody>
                    </table>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button> 
            </form>
        </div>
    </div>
  </div>
</div>