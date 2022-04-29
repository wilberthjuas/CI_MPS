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
$title="ACTUALIZAR PÓLIZA";
require_once($rootDir.'public/html/header_template.php');

  $query1 = "SELECT * FROM datos WHERE folio='$a'   ";   //WHERE  bit_estatus  <> '2'
  $result1 = mysqli_query($conexion,$query1);
  
  while( $row = $result1->fetch_assoc() ){
      $poliza     = $row['folio'];
      $nombre     = $row['nombre'];
      $direccion  = $row['domicilio'];
      $exterior   = $row['exterior'];
      $colonia    = $row['col'];
      $municipio  = $row['municipio'];
      $telefono   = $row['tel'];

      $marca      = $row['marca'];
      $vehiculo   = $row['tipo'];
      $ano        = $row['ano'];
      $color      = $row['color'];
      $placas     = $row['placas'];
      $version    = $row['version'];
      $serie      = $row['serie'];
      $motor      = $row['nmotor'];

      
      $expedicion = $row['expedicion'];
      $vigencia   = $row['vigencia'];
      $cobertura  = $row['cobertura'];
      $total      = $row['costo_total'];
      $abono      = $row['pagomensual'];
      $anoPoliza  = $row['ano2'];
      

      $vendedor   = $row['vendedor'];
      $cobrador   = $row['cobrador'];
      $plataforma = $row['plataforma'];
    
  }

?>
 
<div class="card-body">
  <form method="post" action="update.php" name="registrar">
    <div class="row">
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Póliza</strong>
        </label>
        <input autocomplete="off" type="text" name="folio" class="form-control" value=" <?php echo $poliza; ?>" required/>
      </div>
    </div>
    <div>
      <h2 class="card-body">Información del asegurado</h2>
    </div>
    <div class="row">
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Nombre</strong>
        </label>
        <input autocomplete="off" type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>" required/>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Domicilio</strong>
        </label>
        <input autocomplete="off" type="text" name="domicilio" class="form-control" value="<?php echo $direccion; ?>" required/>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Exterior</strong>
        </label>
        <input autocomplete="off" type="text" name="exterior" class="form-control" value="<?php echo $exterior; ?>" required/>
      </div>  
    </div>
    <div class="row">
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Colonia</strong>
        </label>
        <input autocomplete="off" type="text" name="col" class="form-control" value="<?php echo $colonia; ?>" required/>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Municipio</strong>
        </label>
        <input autocomplete="off" type="text" name="municipio" class="form-control" value="<?php echo $municipio; ?>" required/>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Teléfono</strong>
        </label>
        <input autocomplete="off" type="text" name="tel" class="form-control" value="<?php echo $telefono; ?>" required/>
      </div>
    </div>
    <div>
      <h2 class="card-body">Datos del vehículo</h2>
    </div>
    <div class="row">
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Marca</strong>
        </label>
        <input autocomplete="off" type="text" name="marca" class="form-control" value="<?php echo $marca; ?>" required/>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Vehículo</strong>
        </label>
        <input autocomplete="off" type="text" name="tipo" class="form-control" value="<?php echo $vehiculo; ?>"  required/>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Año</strong>
        </label>
        <input autocomplete="off" type="number" name="ano" class="form-control" value="<?php echo $ano; ?>"  required/>
      </div>
    </div>
    <div class="row">
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Color</strong>
        </label>
        <input autocomplete="off" type="text" name="color" class="form-control" value="<?php echo $color; ?>"  required/>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Placas</strong>
        </label>
        <input autocomplete="off" type="text" name="placas" class="form-control" value="<?php echo $placas; ?>"  style="text-transform: uppercase;" required/>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Versión</strong>
        </label>
        <input autocomplete="off" type="text" name="version" class="form-control" value="<?php echo $version; ?>"  required/>
      </div>
    </div>
    <div class="row">
      <div class="mb-3 col-md-6">
        <label class="form-label">
          <strong>No. serie</strong>
        </label>
        <input autocomplete="off" type="text" name="serie" class="form-control" value="<?php echo $serie; ?>"  required/>
      </div>
      <div class="mb-3 col-md-6">
        <label class="form-label">
          <strong>No. motor</strong>
        </label>
        <input autocomplete="off" type="text" name="nmotor" class="form-control" value="<?php echo $motor; ?>"  required/>
      </div>  
    </div>
    <div>
      <h2 class="card-body">Información de cobertura</h2>
    </div>
    <div class="row">
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Expedición</strong>
        </label>
        <input autocomplete="off" type="date" min="1940-01-01" name="expedicion" class="form-control" value="<?php echo $expedicion; ?>" required/>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Vigencia</strong>
        </label>
        <input autocomplete="off" type="date" min="1940-01-01" name="vigencia" class="form-control" value="<?php echo $vigencia; ?>" required/>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Año de la póliza</strong>
        </label>
        <input autocomplete="off" type="text" name="ano2" class="form-control" value="<?php echo $anoPoliza; ?>" required/>
      </div>
    </div>
    <div class="row">
      <div class="mb-3 mb-3 col-md-4">
        <label class="form-label">
          <strong>Cobertura</strong>
        </label>
        <select class="form-control mb-3" required="required" type="text" name="cobertura">
          <option><?php echo $cobertura; ?></option>
          <option disabled></option>
          <option>MULTIPLATAFORMAS CD JUAREZ</option>
          <option>COTIZACION PARTICULAR RC ECONOMICA CON GRUA</option>
          <option>AMPLIA AUTOMOVIL PARTICULAR HASTA $50,000</option>
          <option>VEHICULO PARTICULAR AMPLIA HASTA $60,000</option>
          <option>AMPLIA AUTOMOVIL PARTICULAR HASTA $70,000</option>
          <option>AMPLIA AUTOMOVIL PARTICULAR HASTA $80,000</option>
          <option>POLIZA PARTICULAR AMPLIA 90 MIL</option>
          <option>POLIZA PARTICULAR AMPLIA 100 MIL</option>
          <option>POLIZA PARTICULAR AMPLIA 110 MIL</option>
          <option>POLIZA PARTICULAR AMPLIA 120 MIL</option>
          <option>POLIZA PARTICULAR AMPLIA 130 MIL</option>
          <option>POLIZA PARTICULAR AMPLIA 140 MIL</option>
          <option>TERCEROS CON GRUA PICKUP</option>
          <option>AMPLIA PICKUP HASTA $50,000</option>
          <option>AMPLIA PICKUP HASTA $60,000</option>
          <option>AMPLIA PICKUP HASTA $70,000</option>
          <option>AMPLIA PICKUP HASTA $80,000</option>
          <option>AMPLIA PICKUP HASTA $90,000</option>
          <option>AMPLIA PICKUP HASTA $100,000</option>
          <option>AMPLIA PICKUP HASTA $110,000</option>
          <option>AMPLIA PICKUP HASTA $120,000</option>
          <option>AMPLIA PICKUP HASTA $130,000</option>
          <option>AMPLIA PICKUP HASTA $140,000</option>
          <option>AMPLIA MOTO</option>
          <option>INTERMEDIA MOTO</option>
          <option>TERCEROS MOTO</option>
          <option>COTIZACION MULTIPLATAFORMAS PROMO JULIO 2021</option>
          <option>COTIZACION POLIZA MULTIPLATAFORMAS 4 MILLONES EN RC</option>
          <option>MULTIPLATAFORMAS ECONOMICA</option>
        </select>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Pago mensual</strong>
        </label>
        <input autocomplete="off" type="number" name="pagomensual" class="form-control" value="<?php echo $abono; ?>" required/>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Costo total</strong>
        </label>
        <input autocomplete="off" type="text" name="costo_total" class="form-control" value="<?php echo $total; ?>" required/>
      </div>
    </div>
    <div class="row">
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Vendedor</strong>
        </label>
        <select class="form-control mb-3" type="text" name="vendedor">
          <option><?php echo $vendedor; ?></option>
          <option disabled></option>
          <option>MPS GDL</option>
          <option>Roberto Cruz</option>
          <option>Gerardo Partida</option>
          <option>Miguel Ortega</option>
          <option>Samuel Mohamed</option>
          <option>Armando Cruz</option>
          <option>Miguel Galindo</option>
          <option>Israel Chavez</option>
          <option>Gibran Rios</option>
          <option>Gerardo Montes</option>
          <option>Jonathan Medina</option>
          <option>Adolfo Talamantes</option>
          <option>Hugo Montano</option>
          <option>MPS CD JUAREZ</option>
          <option>Cesar Banderas</option>
          <option>Gerardo Juarez</option>
          <option>Laura Alvarez</option>
          <option>Daniel Juarez</option>
          <option>Diana Garcia</option>
          <option>Julian Martinez</option>
          <option>Sergio Garcia</option>
          <option>Salvador Reyes</option>
          <option>Cruz Gonzalez</option>
        </select>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Cobrador</strong>
        </label>
        <select class="form-control mb-3" type="text" name="cobrador">
          <option><?php echo $cobrador; ?></option>
          <option disabled></option>
          <option>Roberto Armando</option>
          <option>Samuel Mohamed</option>
          <option>Armando Cruz</option>
          <option>Miguel Galindo</option>
          <option>MPS CD JUAREZ</option>
        </select>
      </div>
      <div class="mb-3 col-md-4">
        <label class="form-label">
          <strong>Plataforma</strong>
        </label>
        <select class="form-control mb-3" type="text" name="plataforma">
          <option><?php echo $plataforma; ?></option>
          <option disabled></option>
          <option>Multi Plataforma</option>
          <option>Uso Particular</option>
          <option>Servicio Publico</option>               
        </select>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">GUARDAR CAMBIOS</button> 
  </form>
</div>


<?php
      //PIE De PAGINA
require_once($rootDir.'public/html/footer_template.php');
?>