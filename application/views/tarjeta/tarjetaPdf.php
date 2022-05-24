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
    $domcom     = '';
    $telefono2  = '';
    $costoTotal = $row['costo_total'];


  }
?>
<html>
<head>
    <link rel="shortcut icon" href="../../logop.png"/>
    <link href="../../public/css/estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
    <center>
        <table border="0" bordercolor="#FFFFFF">
            <tr>
                <td style="position:absolute; top:100px ; left:10px; font-family: 'Bodoni MT Condensed'; font-size:20;">
                    NOMBRE: <?php echo $nombre; ?>        
                </td>
                <td style="color:#000000; font-family:'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:100px ; left:350px">
                    POLIZA: <?php echo $poliza; ?> 
                </td>
            </tr>
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20;  border:0.0px ; position:absolute; top:120px ; left:10px">
                    DIRECCION: <?php echo $direccion; ?> 
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:140px ; left:350px">
                    FECHA: <?php echo $expedicion; ?> 
                </td>
            </tr>
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:140px ; left:10px">
                    CRUCES: <?php echo $entre; ?>
                </td>
            </tr>
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:160px ; left:10px">
                    COLONIA: <?php echo $colonia; ?>
                </td>
            </tr>
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20;  border:0.0px ; position:absolute; top:180px ; left:10px">
                    MUNICIPIO: <?php echo $municipio; ?>
                </td>
            </tr>            
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20;  border:0.0px ; position:absolute; top:200px ; left:10px">
                    COBERTURA: <?php echo $cobertura; ?>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:160px ; left:350px">
                    PLACAS: <?php echo $placas; ?>
                </td>
            </tr>
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20;  border:0.0px; position:absolute; top:220px ; left:10px">
                    VEHICULO: <?php echo $vehiculo;   ?>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed';font-size:20; border:0.0px ; position:absolute; top:180px ; left:350px">
                    ABONO M: <?php echo $pagomensual; ?>
                </td>
            </tr>
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20;  border:0.0px ; position:absolute; top:240px ; left:10px">
                    TELEFONO: <?php echo $telefono; ?>
                </td>

                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20;  border:0.0px ; position:absolute; top:240px ; left:150px">
                    TELEFONO2: <?php echo $telefono2; ?>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:220px ; left:350px">
                    VENDEDOR: <?php echo $vendedor ?>
                </td>
            </tr>
            <tr>
                <td style="color:#000000F; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:240px ; left:350px">
                    COBRADOR: <?php echo $cobrador; ?>
                </td>
            </tr>
            <tr>
                <td style="font-family: 'Bodoni MT Condensed'; font-size:20;  position:absolute; top:270px ; left:30px ; ">
                    FECHA
                </td>
                <td style="font-family: 'Bodoni MT Condensed'; font-size:20; position:absolute; top:270px ; left:120px ;  ">
                    NOTA o COMENTARIO 
                </td>
                <td style=" font-family: 'Bodoni MT Condensed'; font-size:20; position:absolute; top:270px ; left:290px; ">
                    ABONO
                </td>
                <td style=" font-family: 'Bodoni MT Condensed'; font-size:20; position:absolute; top:270px ; left:400px;  ">
                    SALDO
                </td>
            </tr>
        </table>
        <table border="1">
            <?php 
            $cont = 0;
            $x = 290;
            foreach($pagos as $pago ){ 
            ?>
            <tr>
                <td style="position:absolute; top:<?php echo $x; ?>px ; left:10px; ">
                    <input type="text" value="<?php echo date("Y-m-d",strtotime($pagos[0]['fecha']."+ ".$cont." month")); ?>"/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:<?php echo $x; ?>px ; left:100px;   ">
                    <input type="text" readonly/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:<?php echo $x; ?>px ;  left:250px;    ">
                    <input type="text" data-mask="$99999999999"  value="$<?php echo $pago['monto']; ?>"/>
                </td>
                <td style=" font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:<?php echo $x; ?>px ; left:350px;  ">
                    <input type="text"/>
                </td>
            </tr>
            <?php 
                $cont++;
                $x += 20;
            } 
            ?>
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:24;  border:0.0px; position:absolute; top:530px ; left:10px;  ">
                    GRACIAS POR SU CONFIANZA TOTAL A PAGAR POLIZA <?php echo $costoTotal; ?>
                </td>    
            </tr>
        </table>
    </center>
    <center>
        <table border="0" bordercolor="#FFFFFF">
            <tr>
                <td style="position:absolute; top:100px ; left:610px; font-family: 'Bodoni MT Condensed'; font-size:20;">
                    NOMBRE: <?php echo $nombre; ?> 
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:100px ; left:930px">
                    POLIZA: <?php echo $poliza; ?>
                </td>
            </tr>
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20;  border:0.0px ; position:absolute; top:120px ; left:610px">
                    DIRECCION: <?php echo $direccion; ?>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:140px ; left:930px">
                    FECHA: <?php echo $expedicion; ?>
                </td>
            </tr>
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:140px ; left:610px">
                    CRUCES: <?php echo $entre; ?>
                </td>
            </tr>
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:160px ; left:610px">
                    COLONIA: <?php echo $colonia; ?>
                </td> 
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:160px ; left:930px">
                    PLACAS: <?php echo $placas; ?>
                </td>
            </tr>         
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20;  border:0.0px ; position:absolute; top:180px ; left:610px">
                    MUNICIPIO: <?php echo $municipio; ?>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:180px ; left:930px">
                        ABONO M: <?php echo $pagomensual; ?>
               </td>  
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20;  border:0.0px ; position:absolute; top:200px ; left:610px">
                    COBERTURA: <?php echo $cobertura; ?>
                </td>
            </tr>
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20;  border:0.0px; position:absolute; top:220px ; left:610px">
                    VEHICULO: <?php echo $vehiculo;   ?>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:220px ; left:930px">
                    VENDEDOR: <?php echo $vendedor ?>
                </td>
            </tr>
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20;  border:0.0px ; position:absolute; top:240px ; left:610px">
                    TELEFONO: <?php echo $telefono; ?>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20;  border:0.0px ; position:absolute; top:240px ; left:760px">
                    TELEFONO2: <?php echo $telefono2; ?>
                </td>
                <td style="color:#000000F; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:240px ; left:930px">
                    COBRADOR: <?php echo $cobrador; ?>
                </td>
            </tr>     
            <tr>
                <td style="font-family: 'Bodoni MT Condensed'; font-size:20;  position:absolute; top:270px ; left:630px ; ">
                    FECHA
                </td>
                <td style="font-family: 'Bodoni MT Condensed'; font-size:20; position:absolute; top:270px ; left:720px ;  ">
                    NOTA o COMENTARIO
                </td>
                <td style=" font-family: 'Bodoni MT Condensed'; font-size:20; position:absolute; top:270px ; left:875px; ">
                    ABONO
                </td>
                <td style=" font-family: 'Bodoni MT Condensed'; font-size:20; position:absolute; top:270px ; left:1000px;  ">
                    SALDO
                </td>
            </tr>
        </table>
        <table border="1">
            <?php 
            $cont = 0;
            $x = 290;
            foreach($pagos as $pago ){ 
            ?>
            <tr>
                <td style="position:absolute; top:<?php echo $x; ?>px ; left:610px;">
                    <input type="text" value="<?php echo date("Y-m-d",strtotime($pagos[0]['fecha']."+ ".$cont." month")); ?>" />
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:<?php echo $x; ?>px ; left:700px;">
                    <input type="text"readonly />
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:<?php echo $x; ?>px ; left:850px;   ">
                    <input type="text" data-mask="$99999999999"  value="$<?php echo $pago['monto']; ?>"/>
                </td>
                <td style=" font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:<?php echo $x; ?>px ; left:950px;   ">
                    <input  type="text" />
                </td>
            </tr> 
            <?php 
                $cont++;
                $x += 20;
            } 
            ?>                          
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:24;  border:0.0px; position:absolute; top:530px ; left:610px;  ">
                    GRACIAS POR SU CONFIANZA       TOTAL A PAGAR POLIZA<?php echo $costoTotal; ?>
                </td> 
            </tr>                   
        </table>
    </center>
</body>
</html>