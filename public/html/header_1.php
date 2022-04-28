	<header>
	   

	    </div>
	   
	      <?php
	        if(isset($_SESSION['usuario'])){
	          
	          echo "<a href=\"usuarios/login/salir.php\"><div class=\"botom_header\"><p class=\"botonera_usuario\">BIENVENIDO: $pintar_usaurio </p><p class=\"botonera_usuario\">SALIR</p></div></a>";
	          echo "\n";
	        }
	      ?>

	      <?php
	        if( $_SESSION['type'] == "1" or $_SESSION['type'] == "3"  ){
	          echo '<a href="modulos/registro/registrar.php"><div class="botom_header"><p class="botonera" style="font-family:Arial;" aling="center">REGISTRAR POLIZA</p></div></a>';
	          echo "\n";
	        }
	      ?>
          <?php
		  
	        if( $_SESSION['type'] == "7" or $_SESSION['type'] == "8" or $_SESSION['type'] == "9"){
	          echo '<a href="modulos/visor/buscar.php"><div class="botom_header"><p class="botonera"style="font-family:Arial;" aling="center">VISOR</p></div></a>';
	          echo "\n";
	        }
	      ?>
	      <?php
	        if( $_SESSION['type'] == "5"){
	          echo '<a href="modulos/visor/buscar.php"><div class="botom_header"><p class="botonera"style="font-family:Arial;" aling="center">VISOR</p></div></a>';
	          echo "\n";
	        }
	      ?>
          <?php
	        if( $_SESSION['type'] == "1" or $_SESSION['type'] == "3" ){
	          echo '<a href="modulos/registro/registrarpago.php"><div class="botom_header"><p class="botonera"style="font-family:Arial;" aling="center">REGISTRAR PAGO</p></div></a>';
	          echo "\n";
	        }
	      ?>
          <?php
	        if( $_SESSION['type'] == "5"){
	          echo '<a href="modulos/registro/registrarpago.php"><div class="botom_header"><p class="botonera"style="font-family:Arial;" aling="center">VALIDAR PAGOS</p></div></a>';
	          echo "\n";
	        }
	      ?>
	     <?php
	        if( $_SESSION['type'] == "1" ){
	          echo '<a href="modulos/aprobacion/buscar2.php"><div class="botom_header"><p class="botonera"style="font-family:Arial;" aling="center">MODIFICAR</p></div></a>';
	          echo "\n";
	        }
	      ?>
	      <?php
	        if( $_SESSION['type'] == "1"  or $_SESSION['type'] == "2" or $_SESSION['type'] == "3"){
	           echo '<a href="modulos/visor/buscar3.php"><div class="botom_header"><p class="botonera"style="font-family:Arial;" aling="center">HISTORIAL</p></div></a>';
	          echo "\n";
	        }
	      ?>
			<?php
	        if( $_SESSION['type'] == "5"){
	           echo '<a href="modulos/visor/buscar3.php"><div class="botom_header"><p class="botonera"style="font-family:Arial;" aling="center">HISTORIAL</p></div></a>';
	          echo "\n";
	        }
	      ?>
			<?php
	        if( $_SESSION['type'] == "1" ){
	          echo '<a href="modulos/aprobacion/precancelar.php"><div class="botom_header"><p class="botonera"style="font-family:Arial;" aling="center">CANCELAR / REACTIVAR</p></div></a>';
	          echo "\n";
	        }
	      ?>		
          <?php
	        if( $_SESSION['type'] == "1" or $_SESSION['type'] == "2" or $_SESSION['type'] == "3"){
	          echo '<a href="modulos/visor/visor4.php"><div class="botom_header"><p class="botonera"style="font-family:Arial;" aling="center">TARJETA</p></div></a>';
	          echo "\n";
	        }
	      ?>
          
          <?php
	        if( $_SESSION['type'] == "1" or $_SESSION['type'] == "2" or $_SESSION['type'] == "3"){
	          echo '<a href="modulos/visor/buscari.php"><div class="botom_header"><p class="botonera"style="font-family:Arial;" aling="center">VISOR/IMPRESION</p></div></a>';
	          echo "\n";
	        }
	      ?>
	      <?php
	        if( $_SESSION['type'] == "1" or $_SESSION['type'] == "2" or $_SESSION['type'] == "3" or $_SESSION['type'] == "5"){
	          echo '<a href="modulos/aprobacion/buscargrua.php"><div class="botom_header"><p class="botonera"style="font-family:Arial;" aling="center">GRUAS</p></div></a>';
	          echo "\n";
	        }
	      ?>
        <?php
	        if( $_SESSION['type'] == "1"  or $_SESSION['type'] == "2" or $_SESSION['type'] == "3"){
	           echo '<a href="modulos/visor/prebuscar3.php"><div class="botom_header"><p class="botonera"style="font-family:Arial;" aling="center">EXCEL</p></div></a>';
	          echo "\n";
	        }
	      ?>
	      
	    </div>
  </header>
  <div class="espacio-header"></div>