<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	session_start();
	if(isset($_SESSION['usuario']) && isset($_SESSION['usuario'])){
		$pintar_usaurio = strtoupper($_SESSION['usuario']);
	}else{
		header("Location: index.php");
		exit();
	}
	

       $is=$_SESSION['id'];
		$name=$_SESSION['name'];


?>
<html><link rel="shortcut icon" href="../../logop.png"/>
<head><title>Mutualidad MPS</title></head>
<link href="calendario_dw/calendario_dw-estilos.css" type="text/css" rel="STYLESHEET">
   <style type="text/css">
   body{
      font-family: tahoma, verdana, sans-serif;
   }
   </style>
   <script type="text/javascript" src="calendario_dw/jquery-1.4.4.min.js"></script>
   <script type="text/javascript" src="calendario_dw/calendario_dw.js"></script>
   
   <script type="text/javascript">
   $(document).ready(function(){
      $(".campofecha").calendarioDW();
   })
   </script>
<link href="../../public/css/estilo.css" rel="stylesheet" type="text/css">
<link charset="utf-8">
<body>



	<!--Cabecera-->
    <?php
      //CABECERA DEL SITIO
      require_once('../../public/html/header.php');
      require_once('../../conexion/conexion.php');
	mysqli_select_db($conexion, $database);
    ?>

	<div class="container">
		<div class="row">
			<div class="col-10 push-1">
			<div class="panel_head">
				

			</div>
			<div class="panel_body_footer">
				
				<form id="form1" name="registrar" action="insertar.php" method="post">
					
					<div class="row">
					<h1></h1><div class="col-12"><br><br> <p class="titulo-form" style="font-family:Arial;" aling="center">REGISTRO DE NUEVA POLIZA <?php ?>&#9660;</p><br><br></div>
					</div></h1>
                    <div class="col-12"><br><br> <p class="titulo-form"style="font-family:Arial;" aling="center">INFORMACION DEL ASEGURADO</p><br><br></div>
					<div class="row">
						<div class="col-2 push-3"><p class="labels">NOMBRE</p></div>
						<div class="col-4"> <input class="text-box text-form" required type="text" name="nombre" /> </div>
					</div>
	
					<div class="row">
					<div class="col-2 push-3"><p class="labels">DOMICILIO</p></div>
						<div class="col-4"> <input class="text-box text-form"  required type="text" name="domicilio" /> </div>
					</div>
					<div class="row">
					<div class="col-2 push-3"><p class="labels">EXTERIOR</p></div>
						<div class="col-4"> <input class="text-box text-form"  required type="text" name="exterior" /> </div>
					</div>
                    <div class="row">
					<div class="col-2 push-3"><p class="labels">CRUCES</p></div>
						<div class="col-4"> <input class="text-box text-form"  required type="text" name="entre" /> </div>
					</div>
					<div class="row">
						<div class="col-2 push-3"><p class="labels">COLONIA</p></div>
						<div class="col-4"> <input class="text-box text-form"  required type="text" name="col" /> </div>
					</div>
                    <div class="row">
                    <div class="row">
						<div class="col-2 push-3"><p class="labels">MUNICIPIO</p></div>
						<div class="col-4"> <input class="text-box text-form" required type="text" name="municipio" /> </div>
					</div>
					
                   
                        
					
                    <div class="row">
						<div class="col-2 push-3"><p class="labels">TELEFONO</p></div>
						<div class="col-4"> <input class="text-box text-form"  required type="text" name="tel" /> </div>
					</div>
                   
                    <div class="row">
						<div class="col-2 push-3"><p class="labels">CODIGO POSTAL</p></div>
						<div class="col-4"> <input class="text-box text-form"  required type="text" name="cp" /> </div>
					</div>
					
					<div class="col-12"><br><br> <p class="titulo-form"style="font-family:Broadway;" aling="center">DATOS DEL VEHICULO</p><br><br></div>

							 <div class="row">
						<div class="col-2 push-3"><p class="labels">MARCA</p></div>
						<div class="col-4"> <input class="text-box text-form"  required type="text" name="marca" /> </div>
					</div>
                     <div class="row">
						<div class="col-2 push-3"><p class="labels">TIPO</p></div>
						<div class="col-4"> <input class="text-box text-form"  required type="text" name="tipo" /> </div>
					</div>
                     <div class="row">
						<div class="col-2 push-3"><p class="labels">A&ntilde;O</p></div>
						<div class="col-4"> <input class="text-box text-form"  required type="text" name="ano" /> </div>
					</div>
                     <div class="row">
						<div class="col-2 push-3"><p class="labels">COLOR</p></div>
						<div class="col-4"> <input class="text-box text-form"  required type="text" name="color" /> </div>
					</div>
                     <div class="row">
						<div class="col-2 push-3"><p class="labels">PLACAS</p></div>
						<div class="col-4"> <input class="text-box text-form"  required type="text" name="placas" /> </div>
					</div>
                     <div class="row">
						<div class="col-2 push-3"><p class="labels">VERSION</p></div>
						<div class="col-4"> <input class="text-box text-form"  required type="text" name="version" /> </div>
					</div>
                     <div class="row">
						<div class="col-2 push-3"><p class="labels">NO SERIE</p></div>
						<div class="col-4"> <input class="text-box text-form"  required type="text" name="serie" /> </div>
					</div>
                     <div class="row">
						<div class="col-2 push-3"><p class="labels">NO MOTOR</p></div>
						<div class="col-4"> <input class="text-box text-form"  required type="text" name="nmotor" /> </div>
					</div>
					
                      <div class="col-12"><br><br> <p class="titulo-form"style="font-family:Arial;" aling="center">INFORMACION DE COBERTURA A CONTRATAR</p><br><br></div>
                      
                      <div class="row">
						<div class="col-2 push-3"><p class="labels">EXPEDICION</p></div>
						<div class="col-4"> <input class="text-box text-form"  required type="date" name="expedicion" /> </div>
					</div>
                    
                    <div class="row">
						<div class="col-2 push-3"><p class="labels">VIGENCIA</p></div>
						<div class="col-4"> <input class="text-box text-form"  required type="date" name="vigencia"  />  </div>
					</div>
                      <div class="row">
						<div class="col-2 push-3"><p class="labels">COBERTURA</p></div>
						<div class="col-4"> <select class="text-box text-form"  required type="text" name="cobertura" /> 
                       <option></option>
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
					</div>
                    <div class="row">
						<div class="col-2 push-3"><p class="labels">DEDUCIBLE</p></div>
						<div class="col-4"> <select class="text-box text-form"  required type="text" name="deducible" /> 
                       <option></option>
                       <option>SI APLICA</option>
                        <option>NO APLICA</option>
                    
                         </select>
                        </div>
					</div>
                    <div class="row">
						<div class="col-2 push-3"><p class="labels">COSTO TOTAL</p></div>
						<div class="col-4"> <input class="text-box text-form"  required type="text" name="costo_total" /> </div>
					</div>
                    
                    <div class="row">
						<div class="col-2 push-3"><p class="labels">OBSERVACIONES</p></div>
						<div class="col-4"> <input class="text-box text-form"  required type="text" name="observaciones" /> </div>
					</div>
                    <div class="row">
						<div class="col-2 push-3"><p class="labels">PAGO INICIAL</p></div>
						<div class="col-4"> <input class="text-box text-form"  required type="text" name="pagoinicial" /> </div>
					</div>
                    <div class="row">
						<div class="col-2 push-3"><p class="labels">PAGO MENSUAL</p></div>
						<div class="col-4"> <input class="text-box text-form"  required type="text" name="pagomensual" /> </div>
					</div>
					<div class="row">
						<div class="col-2 push-3"><p class="labels">PLAZO</p></div>
						<div class="col-4"> <input class="text-box text-form"  required type="text" name="plazo" /> </div>
					</div>
                    <div class="row">
						
						<div class="col-4"> <input    type="hidden" name="captura"  value="<?php echo"$name" ?>" /> </div>
					</div>
                    
                    <div class="col-12"><br><br> <p class="titulo-form"style="font-family:Arial;" aling="center">INFORMACION DE CAPTURA</p><br><br></div>
                      
                      <div class="row">
						<div class="col-2 push-3"><p class="labels">VENDEDOR</p></div>
						<div class="col-4"> <select class="text-box text-form"  required type="text" name="vendedor" /> 
                        <option></option>
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
					</div>
                    
                    <div class="row">
						<div class="col-2 push-3"><p class="labels">COBRADOR</p></div>
						<div class="col-4"> <select class="text-box text-form"  required type="text" name="cobrador" /> 
						<option></option>
                        <option>Roberto Armando</option>
                        <option>Samuel Mohamed</option>
                        <option>Armando Cruz</option>
                        <option>Miguel Galindo</option>
                        <option>MPS CD JUAREZ</option>
                      
                        </select>
                        </div>
                        
                         <div class="row">
						<div class="col-2 push-3"><p class="labels">PLATAFORMA</p></div>
						<div class="col-4"> <select class="text-box text-form"  required type="text" name="plataforma" /> 
                        <option></option>
                        <option>Multi Plataforma</option>
                        <option>Uso Particular</option>
                        <option>Servicio Publico</option>
                  
                      
                        </select>
                        </div>
					</div>

					<br><br><br>
					<div class="col-3 push-6"> <input class="botom" type="submit"  value="Enviar" /></div>
					<br><br><br><br><br><br>

				</form>

			</div>
			</div>
            
		</div>
	</div><!--Fin container-->
	<div class="espacio-header"></div>


<?php





?>
</body>
</html>