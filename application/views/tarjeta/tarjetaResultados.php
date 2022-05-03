<?php

foreach($result1 as $row ){
    $poliza     = $row['folio'];
    $nombre     = $row['nombre'];
    $direccion  = $row['domicilio'].' '.$row['exterior'];
    $colonia    = $row['col'];
    $municipio  = $row['municipio'];
    $telefono   = $row['tel'];
    $entre      = $row['entre'];

    $placas     = $row['placas'];
    $vehiculo   = $row['marca'].' '.$row['tipo'].' '.$row['color'].' '.$row['ano'];
    $expedicion = $row['expedicion'];
    $pagomensual= $row['pagomensual'];
    $cobertura  = $row['cobertura'];
    $vendedor   = $row['vendedor'];
    $cobrador   = $row['cobrador'];

    $f1         = $row['fech1'];

    $m1         = $row['monto1'];
    $m2         = $row['monto2'];
    $m3         = $row['monto3'];
    $m4         = $row['monto4'];
    $m5         = $row['monto5'];
    $m6         = $row['monto6'];
    $m7         = $row['monto7'];
    $m8         = $row['monto8'];
    $m9         = $row['monto9'];
    $m10        = $row['monto10'];
    $m11        = $row['monto11'];


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
                            <tr>
                                <td><input type="text" class="form-control" name="fech1" value="<?php echo $f1; ?>"></td>
                                <td><input type="text" class="form-control" name="" readonly></td>
                                <td><input type="text" class="form-control" name="monto1" value="<?php echo $m1; ?>"></td>
                                <td><input type="text" class="form-control" name=""></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="fech2" value="<?php echo date("Y-m-d",strtotime($f1."+ 1 month"));?>">
                                </td>
                                <td><input type="text" class="form-control" name="" readonly></td>
                                <td><input type="text" class="form-control" name="monto2" value="<?php echo $m2; ?>"></td>
                                <td><input type="text" class="form-control" name=""></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="fech3" value="<?php echo date("Y-m-d",strtotime($f1."+ 2 month"));?>">
                                </td>
                                <td><input type="text" class="form-control" name="" readonly></td>
                                <td><input type="text" class="form-control" name="monto3" value="<?php echo $m3; ?>"></td>
                                <td><input type="text" class="form-control" name=""></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="fech4" value="<?php echo date("Y-m-d",strtotime($f1."+ 3 month"));?>">
                                </td>
                                <td><input type="text" class="form-control" name="" readonly></td>
                                <td><input type="text" class="form-control" name="monto4" value="<?php echo $m4; ?>"></td>
                                <td><input type="text" class="form-control" name=""></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="fech5" value="<?php echo date("Y-m-d",strtotime($f1."+ 4 month"));?>">
                                </td>
                                <td><input type="text" class="form-control" name="" readonly></td>
                                <td><input type="text" class="form-control" name="monto5" value="<?php echo $m5; ?>"></td>
                                <td><input type="text" class="form-control" name=""></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="fech6" value="<?php echo date("Y-m-d",strtotime($f1."+ 5 month"));?>">
                                </td>
                                <td><input type="text" class="form-control" name="" readonly></td>
                                <td><input type="text" class="form-control" name="monto6" value="<?php echo $m6; ?>"></td>
                                <td><input type="text" class="form-control" name=""></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="fech7" value="<?php echo date("Y-m-d",strtotime($f1."+ 6 month"));?>">
                                </td>
                                <td><input type="text" class="form-control" name="" readonly></td>
                                <td><input type="text" class="form-control" name="monto7" value="<?php echo $m7; ?>"></td>
                                <td><input type="text" class="form-control" name=""></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="fech8" value="<?php echo date("Y-m-d",strtotime($f1."+ 7 month"));?>">
                                </td>
                                <td><input type="text" class="form-control" name="" readonly></td>
                                <td><input type="text" class="form-control" name="monto8" value="<?php echo $m8; ?>"></td>
                                <td><input type="text" class="form-control" name=""></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="fech9" value="<?php echo date("Y-m-d",strtotime($f1."+ 8 month"));?>">
                                </td>
                                <td><input type="text" class="form-control" name="" readonly></td>
                                <td><input type="text" class="form-control" name="monto9" value="<?php echo $m9; ?>"></td>
                                <td><input type="text" class="form-control" name=""></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="fech10" value="<?php echo date("Y-m-d",strtotime($f1."+ 9 month"));?>">
                                </td>
                                <td><input type="text" class="form-control" name="" readonly></td>
                                <td><input type="text" class="form-control" name="monto10" value="<?php echo $m10; ?>"></td>
                                <td><input type="text" class="form-control" name=""></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="fech11" value="<?php echo date("Y-m-d",strtotime($f1."+ 10 month"));?>">
                                </td>
                                <td><input type="text" class="form-control" name="" readonly></td>
                                <td><input type="text" class="form-control" name="monto11" value="<?php echo $m11; ?>"></td>
                                <td><input type="text" class="form-control" name=""></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="fech12" value="<?php echo date("Y-m-d",strtotime($f1."+ 11 month"));?>">
                                </td>
                                <td><input type="text" class="form-control" name="" readonly></td>
                                <td><input type="text" class="form-control" name="monto12" value="<?php echo $m11; ?>"></td>
                                <td><input type="text" class="form-control" name=""></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button> 
            </form>
        </div>
    </div>
  </div>
</div>