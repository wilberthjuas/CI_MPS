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

  //CABECERA DEL SITIO
$user=$_SESSION['type'];
$rootDir='../../';
$title="HISTORIAL";
require_once($rootDir.'public/html/header_template.php');


$query1 = "SELECT folio, nombre, domicilio, exterior, tel, marca, tipo, placas, serie, ano, expedicion, bit, mot, cobertura, vendedor, municipio, cobrador  FROM datos  where  expedicion ";
$result1 = mysqli_query($conexion,$query1);
$resultado = "";

?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.11.5/r-2.2.9/sc-2.0.5/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.11.5/r-2.2.9/sc-2.0.5/datatables.min.js"></script>

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
            while( $row = $result1->fetch_assoc() ){
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

<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Datatables Responsive
    $("#datatables-reponsive").DataTable({
      responsive: true
    });
  });
</script>


<?php
      //PIE De PAGINA
require_once($rootDir.'public/html/footer_template.php');
?>
