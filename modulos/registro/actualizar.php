<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
if(isset($_SESSION['usuario']) && isset($_SESSION['usuario'])){
  $pintar_usaurio = strtoupper($_SESSION['usuario']);
}else{
  header("Location: ../../index.php");
  exit();
}
  //CONEXION
require_once('../../conexion/conexion.php');
mysqli_select_db($conexion, $database);
$a = $_POST['buscar'];


//CABECERA DEL SITIO
$user=$_SESSION['type'];
$rootDir='../../';
$title="REGISTRAR PAGO";
require_once($rootDir.'public/html/header_template.php');


$query1 = "SELECT * FROM datos   WHERE folio='$a'   ";   //WHERE estatus='0'
$result1 = mysqli_query($conexion,$query1);
$resultado = "";


while( $row = $result1->fetch_assoc() ){
  $status     = $row['bit'] == 0 ? 'Activa':'Cancelada';
  $poliza     = $row['folio'];
  $nombre     = $row['nombre'];
  $direccion  = $row['domicilio'].' '.$row['exterior'];
  $colonia    = $row['col'];
  $municipio  = $row['municipio'];
  $telefono   = $row['tel'];

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

  $uno          = $row['uno'];
  $folio1       = $row['folio1'];
  $cobra1       = $row['cobra1'];
  $monto1       = $row['monto1'];
  $fech1        = $row['fech1'];
  $re1          = $row['re1'];

  $dos          = $row['dos'];
  $folio2       = $row['folio2'];
  $cobra2       = $row['cobra2'];
  $monto2       = $row['monto2'];
  $fech2        = $row['fech2'];
  $re2          = $row['re2'];

  $tres         = $row['tres'];
  $folio3       = $row['folio3'];
  $cobra3       = $row['cobra3'];
  $monto3       = $row['monto3'];
  $fech3        = $row['fech3'];
  $re3          = $row['re3'];

  $cuatro       = $row['cuatro'];
  $folio4       = $row['folio4'];
  $cobra4       = $row['cobra4'];
  $monto4       = $row['monto4'];
  $fech4        = $row['fech4'];
  $re4          = $row['re4'];

  $cinco        = $row['cinco'];
  $folio5       = $row['folio5'];
  $cobra5       = $row['cobra5'];
  $monto5       = $row['monto5'];
  $fech5        = $row['fech5'];
  $re5          = $row['re5'];

  $seis         = $row['seis'];
  $folio6       = $row['folio6'];
  $cobra6       = $row['cobra6'];
  $monto6       = $row['monto6'];
  $fech6        = $row['fech6'];
  $re6          = $row['re6'];

  $siete        = $row['siete'];
  $folio7       = $row['folio7'];
  $cobra7       = $row['cobra7'];
  $monto7       = $row['monto7'];
  $fech7        = $row['fech7'];
  $re7          = $row['re7'];

  $ocho         = $row['ocho'];
  $folio8       = $row['folio8'];
  $cobra8       = $row['cobra8'];
  $monto8       = $row['monto8'];
  $fech8        = $row['fech8'];
  $re8          = $row['re8'];

  $nueve        = $row['nueve'];
  $folio9       = $row['folio9'];
  $cobra9       = $row['cobra9'];
  $monto9       = $row['monto9'];
  $fech9        = $row['fech9'];
  $re9          = $row['re9'];

  $diez          = $row['diez'];
  $folio10       = $row['folio10'];
  $cobra10       = $row['cobra10'];
  $monto10       = $row['monto10'];
  $fech10        = $row['fech10'];
  $re10          = $row['re10'];

  $once          = $row['once'];
  $folio11       = $row['folio11'];
  $cobra11       = $row['cobra11'];
  $monto11       = $row['monto11'];
  $fech11        = $row['fech11'];
  $re11          = $row['re11'];

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
            <tr>
              <td>1</td>
              <td><?php echo $uno; ?></td>
              <td><?php echo $folio1; ?></td>
              <td><?php echo $cobra1; ?></td>
              <td><?php echo $monto1; ?></td>
              <td><?php echo $fech1; ?></td>
              <td><?php echo $re1; ?></td>
            </tr>
            <tr>
              <td>2</td>
              <td><?php echo $dos; ?></td>
              <td><?php echo $folio2; ?></td>
              <td><?php echo $cobra2; ?></td>
              <td><?php echo $monto2; ?></td>
              <td><?php echo $fech2; ?></td>
              <td><?php echo $re2; ?></td>
            </tr>
            <tr>
              <td>3</td>
              <td><?php echo $tres; ?></td>
              <td><?php echo $folio3; ?></td>
              <td><?php echo $cobra3; ?></td>
              <td><?php echo $monto3; ?></td>
              <td><?php echo $fech3; ?></td>
              <td><?php echo $re3; ?></td>
            </tr>
            <tr>
              <td>4</td>
              <td><?php echo $cuatro; ?></td>
              <td><?php echo $folio4; ?></td>
              <td><?php echo $cobra4; ?></td>
              <td><?php echo $monto4; ?></td>
              <td><?php echo $fech4; ?></td>
              <td><?php echo $re4; ?></td>
            </tr>
            <tr>
              <td>5</td>
              <td><?php echo $cinco; ?></td>
              <td><?php echo $folio5; ?></td>
              <td><?php echo $cobra5; ?></td>
              <td><?php echo $monto5; ?></td>
              <td><?php echo $fech5; ?></td>
              <td><?php echo $re5; ?></td>
            </tr>
            <tr>
              <td>6</td>
              <td><?php echo $seis; ?></td>
              <td><?php echo $folio6; ?></td>
              <td><?php echo $cobra6; ?></td>
              <td><?php echo $monto6; ?></td>
              <td><?php echo $fech6; ?></td>
              <td><?php echo $re6; ?></td>
            </tr>
            <tr>
              <td>7</td>
              <td><?php echo $siete; ?></td>
              <td><?php echo $folio7; ?></td>
              <td><?php echo $cobra7; ?></td>
              <td><?php echo $monto7; ?></td>
              <td><?php echo $fech7; ?></td>
              <td><?php echo $re7; ?></td>
            </tr>
            <tr>
              <td>8</td>
              <td><?php echo $ocho; ?></td>
              <td><?php echo $folio8; ?></td>
              <td><?php echo $cobra8; ?></td>
              <td><?php echo $monto8; ?></td>
              <td><?php echo $fech8; ?></td>
              <td><?php echo $re8; ?></td>
            </tr>
            <tr>
              <td>9</td>
              <td><?php echo $nueve; ?></td>
              <td><?php echo $folio9; ?></td>
              <td><?php echo $cobra9; ?></td>
              <td><?php echo $monto9; ?></td>
              <td><?php echo $fech9; ?></td>
              <td><?php echo $re9; ?></td>
            </tr>
            <tr>
              <td>10</td>
              <td><?php echo $diez; ?></td>
              <td><?php echo $folio10; ?></td>
              <td><?php echo $cobra10; ?></td>
              <td><?php echo $monto10; ?></td>
              <td><?php echo $fech10; ?></td>
              <td><?php echo $re10; ?></td>
            </tr>
            <tr>
              <td>11</td>
              <td><?php echo $once; ?></td>
              <td><?php echo $folio11; ?></td>
              <td><?php echo $cobra11; ?></td>
              <td><?php echo $monto11; ?></td>
              <td><?php echo $fech11; ?></td>
              <td><?php echo $re11; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <form method="post" action="pagos.php">
          <div class="row">
            <div class="mb-3 col-md-2">
              <label class="form-label"><strong>Pago</strong></label>
              <select class="form-control mb-3" required="required" type="text" name="pag" >
                <option>Seleccione...</option>
                <option>Pagado</option>
              </select>
            </div>
            <div class="mb-3 col-md-2">
              <label class="form-label"><strong>Folio</strong></label>
              <input autocomplete="off" type="text" name="fol" class="form-control"  placeholder="Ingrese folio de cobro" required />
            </div>
            <div class="mb-3 col-md-3">
              <label class="form-label"><strong>Cobrador</strong></label>
              <input autocomplete="off" type="text" name="cob" class="form-control"  placeholder="Ingrese Cobrador" required />
            </div>
            <div class="mb-3 col-md-2">
              <label class="form-label"><strong>Monto</strong></label>
              <input autocomplete="off" type="text" name="mon" class="form-control"  placeholder="Ingrese monto" required />
            </div>
            <div class="mb-3 col-md-2">
              <label class="form-label"><strong>Fecha del recibo</strong></label>
              <input autocomplete="off" type="date" name="re" class="form-control" required />
            </div>
          </div>

          <input  type="hidden" name="folio" value="<?php echo $a; ?>"  />
          <button type="submit" class="btn btn-primary">Guardar Cambios</button> 
        </form>
      </div>
    </div>
  </div>  
</div>

<?php
//PIE De PAGINA
require_once($rootDir.'public/html/footer_template.php');
?>














 
