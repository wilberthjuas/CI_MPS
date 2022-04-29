<?php
	//ERROR REPORTIN PARA ELIMINAR NOTICEs Y WARNINGs
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	//CONEXION
    require_once('conexion/conexion.php');
    mysqli_select_db($conexion, $database);
    //SESSIONES DE USUARIO
		session_start();
			ob_start();
		if(isset($_SESSION['usuario']) && isset($_SESSION['usuario'])){
      		$pintar_usaurio = strtoupper($_SESSION['usuario']);
		}else{
			//REDIRECION A INDEX Y EJECUTO EXIT
			header("Location: index.php");
			exit();
		}
			ob_start();
?>

<?php
      //CABECERA DEL SITIO
$user=$_SESSION['type'];
$rootDir='';
require_once($rootDir.'public/html/header_template.php');

?>

<div align="center">
	<img src="logop.png" width="554" height="554">
</div>	


<?php
      //PIE De PAGINA
require_once($rootDir.'public/html/footer_template.php');
?>
