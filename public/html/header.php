	<header>
	    <div class="left_cabecera">

	    </div>
	    <div class="right_botonera">
				
				<div class="dropdiv">
					<div class="dropdown" style="float:right;">
						<button class="dropbtn"></button>
						<div class="dropdown-content">
							<?php
	        				if($_SESSION['type'] == "1" || $_SESSION['type'] == "2" || $_SESSION['type'] == "3" || $_SESSION['type'] == "4" || $_SESSION['type'] == "5" || $_SESSION['type'] == "6" || $_SESSION['type'] == "7"|| $_SESSION['type'] == "8"|| $_SESSION['type'] == "9"|| $_SESSION['type'] == "10"|| $_SESSION['type'] == "11" ){
								echo "<a href=\"../../inicio.php\"><p>BIENVENIDO</p><p>$pintar_usaurio</p></a>";
							}
							?>

							

					  <?php
	        				if($_SESSION['type'] == "1" or $_SESSION['type'] == "3" ){
								echo "<a href=\"../../modulos/registro/registrar.php\"><p>REGISTRAR POLIZA</p><p></p></a>";
							}
							?>
                            
                            
                              <?php
	        				if( $_SESSION['type'] == "1"  or $_SESSION['type'] == "3"){
								echo "<a href=\"../../modulos/registro/registrarpago.php\"><p>REGISTRAR PAGO</p><p></p></a>";
							}
							?>
                            <?php
	        				if( $_SESSION['type'] == "5"){
								echo "<a href=\"../../modulos/registro/registrarpago.php\"><p>VALIDAR PAGO</p><p></p></a>";
							}
							?>
                              <?php
	        				if( $_SESSION['type'] == "1" ){
								echo "<a href=\"../../modulos/aprobacion/buscar2.php\"><p>MODIFICAR</p><p></p></a>";
							}
							?>
                            
                            <?php
	        				if($_SESSION['type'] == "1"  or $_SESSION['type'] == "2" or $_SESSION['type'] == "3" ){
								echo "<a href=\"../../modulos/visor/buscar3.php\"><p>HISTORIAL</p><p></p></a>";
							}
							?>
                            <?php
	        				if($_SESSION['type'] == "5"){
								echo "<a href=\"../../modulos/visor/buscar3.php\"><p>HISTORIAL</p><p></p></a>";
							}
							?>
                              <?php
	        				if( $_SESSION['type'] == "1" ){
								echo "<a href=\"../../modulos/aprobacion/precancelar.php\"><p>CANCELAR / REACTIVAR</p><p></p></a>";
							}
							?>
                            
                              <?php
	        				if($_SESSION['type'] == "1" or $_SESSION['type'] == "2" or $_SESSION['type'] == "3" ){
								echo "<a href=\"../../modulos/visor/visor4.php\"><p>TARJETA</p><p></p></a>";
							}
							?>
                             <?php
	        				if($_SESSION['type'] == "1"  or $_SESSION['type'] == "2" or $_SESSION['type'] == "3" ){
								echo "<a href=\"../../modulos/visor/buscari.php\"><p>VISOR/IMPRESION</p><p></p></a>";
							}
							?>

								
					    		<a href="../../usuarios/login/salir.php">SALIR</a>
					  	</div>
					</div>
				</div>
				<div class="search"> 
					
				</div>
	      
	    </div>
  </header>
  <div class="espacio-header"></div>