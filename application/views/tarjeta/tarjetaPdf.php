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
            <tr>
                <td style="position:absolute; top:290px ; left:10px; ">
                    <input type="text" name="fech12" value=" <?php echo $f1; ?>">
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:290px ; left:100px;   ">
                    <input type="text" name="uno" value="" readonly>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:290px ;  left:250px;    ">
                    <input type="text" name="monto1" value="<?php echo $m1; ?>">
                </td>
                <td style=" font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:290px ; left:350px;  ">
                    <input   type="text" name="" value="" width="">
                </td>
            </tr>
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:310px ; left:10px ">
                    <input type="text" name="fech2" value=" <?php echo date("Y-m-d",strtotime($f1."+ 1 month"));  ?>"/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:310px ; left:100px;  ">
                    <input type="text" name="dos" value=""/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:310px ; left:250px; ">
                    <input type="text" name="monto2" value="<?php echo $m2; ?>"/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:310px ; left:350px;    ">
                    <input type="text" name="" value=""/>
                </td>
            </tr>
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:330px ; left:10px ">
                    <input type="text" name="fech3" value=" <?php echo date("Y-m-d",strtotime($f1."+ 2 month"));  ?>"/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:330px ; left:100px;  ">
                    <input type="text" name="tres" value=""/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:330px ; left:250px; ">
                    <input type="text" name="monto3" value="<?php echo $m3; ?>"/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:330px ; left:350px;  ">
                    <input type="text" name="" value=""/>
                </td>
            </tr>
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:350px ; left:10px">
                    <input type="text" name="fech4" value="<?php echo date("Y-m-d",strtotime($f1."+ 3 month"));  ?>"/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:350px ; left:100px;  ">
                    <input type="text" name="cuatro" value=""/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;   position:absolute; top:350px ; left:250px;">
                    <input type="text" name="monto4" value="<?php echo $m4; ?>"/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:350px ; left:350px;  ">
                    <input type="text" name="" value=""/>
                </td>
            </tr>
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:370px ; left:10px">
                    <input type="text" name="fech5" value="<?php echo date("Y-m-d",strtotime($f1."+ 4 month"));  ?>"/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:370px ; left:100px; ">
                    <input type="text" name="cinco" value=""/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:370px ; left:250px;  ">
                    <input type="text" name="monto5" value="<?php echo $m5; ?>"/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:370px ; left:350px;    ">
                    <input type="text" name="" value=""/>
                </td>
            </tr>
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:390px ; left:10px">
                    <input type="text" name="fech6" value="<?php echo date("Y-m-d",strtotime($f1."+ 5 month"));  ?>"/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:390px ; left:100px;">
                    <input type="text" name="seis" value=""/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:390px ; left:250px;  ">
                    <input type="text" name="monto6" value="<?php echo $m6; ?>"/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:390px ; left:350px;   ">
                    <input type="text" name="" value=""/>
                </td>
            </tr>
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:410px ; left:10px">
                    <input type="text" name="fech7" value="<?php echo date("Y-m-d",strtotime($f1."+ 6 month"));  ?>"/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:410px ; left:100px; ">
                    <input type="text" name="siete" value=""/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:410px ; left:250px; ">
                    <input type="text" name="monto7" value="<?php echo $m7; ?>"/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:410px ; left:350px;  ">
                    <input type="text" name="" value=""/>
                </td>
            </tr>
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:430px ; left:10px">
                    <input type="text" name="fech8" value="<?php echo date("Y-m-d",strtotime($f1."+ 7 month"));  ?>"/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:430px ; left:100px;  ">
                    <input type="text" name="ocho" value=""/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:430px ; left:250px;  ">
                    <input type="text" name="monto8" value="<?php echo $m8; ?>"/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:430px ; left:350px; ">
                    <input type="text" name="" value=""/>
                </td>
            </tr>
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:450px ; left:10px">
                    <input type="text" name="fech9" value="<?php echo date("Y-m-d",strtotime($f1."+ 8 month"));  ?>"/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:450px ; left:100px; ">
                    <input type="text" name="nueve" value=""/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:450px ; left:250px;  ">
                    <input type="text" name="monto9" value="<?php echo $m9; ?>"/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:450px ; left:350px;   ">
                    <input type="text" name="" value=""/>
                </td>
            </tr>
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:470px ; left:10px">
                    <input type="text" name="fech10" value="<?php echo date("Y-m-d",strtotime($f1."+ 9 month"));  ?>"/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:470px ; left:100px; ">
                    <input type="text" name="diez" value=""/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:470px ; left:250px;  ">
                    <input type="text" name="monto10" value="<?php echo $m10; ?>"/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:470px ; left:350px;   ">
                    <input type="text" name="" value=""/>
                </td>
            </tr>
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:490px ; left:10px">
                    <input type="text" name="fech11" value="<?php echo date("Y-m-d",strtotime($f1."+ 10 month"));  ?>"/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:490px ; left:100px; ">
                    <input type="text" name="once" value=""/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:490px ; left:250px;  ">
                    <input type="text" name="monto11" value="<?php echo $m11; ?>"/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:510px ; left:10px">
                    <input type="text" name="fech11" value="<?php echo date("Y-m-d",strtotime($f1."+ 11 month"));  ?>"/>
                </td>
            </tr>
            <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:510px ; left:100px; ">
                    <input type="text" name="once" value=""/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:510px ; left:250px;  ">
                    <input type="text" name="monto11" value="<?php echo $m10; ?>"/>
                </td>                
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:490px ; left:350px; ">
                    <input type="text" name="" value=""/>
                </td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:510px ; left:350px;   ">
                    <input type="text" name="" value=""/>
                </td>
            </tr>
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
                    <tr>
                        <td style="position:absolute; top:290px ; left:610px; width:155px">
                            <input type="text" name="fech1" value=" <?php echo $f1; ?>">
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:290px ; left:700px;width:200px; height:200px  ">
                            <input type="text" name="uno" value="" readonly>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:290px ; left:850px;   ">
                            <input type="text" name="monto1" value="<?php echo $m1; ?>">
                        </td>
                        <td style=" font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:290px ; left:950px;   ">
                            <input  type="text" name="" value="" width="">
                        </td>
                    </tr>
                    <tr>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:310px ; left:610px ">
                            <input type="text" name="fech2" value=" <?php echo date("Y-m-d",strtotime($f1."+ 1 month"));  ?>"/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:310px ; left:700px;  ">
                            <input type="text" name="dos" value=""/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:310px ; left:850px;  ">
                            <input type="text" name="monto2" value="<?php echo $m2; ?>"/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:310px ; left:950px;    ">
                            <input type="text" name="" value=""/>
                        </td>
                    </tr>
                    <tr>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:330px ; left:610px ">
                            <input type="text" name="fech3" value=" <?php echo date("Y-m-d",strtotime($f1."+ 2 month"));  ?>"/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:330px ; left:700px;  ">
                            <input type="text" name="tres" value=""/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:330px ; left:850px;   ">
                            <input type="text" name="monto3" value="<?php echo $m3; ?>"/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:330px ; left:950px;   ">
                            <input type="text" name="" value=""/>
                        </td>
                    </tr>
                    <tr>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:350px ; left:610px">
                            <input type="text" name="fech4" value="<?php echo date("Y-m-d",strtotime($f1."+ 3 month"));  ?>"/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:350px ; left:700px; ">
                            <input type="text" name="cuatro" value=""/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;   position:absolute; top:350px ; left:850px; ">
                            <input type="text" name="monto4" value="<?php echo $m4; ?>"/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:350px ; left:950px;   ">
                            <input type="text" name="" value=""/>
                        </td>
                    </tr>
                    <tr>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:370px ; left:610px">
                            <input type="text" name="fech5" value="<?php echo date("Y-m-d",strtotime($f1."+ 4 month"));  ?>"/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:370px ; left:700px; ">
                            <input type="text" name="cinco" value=""/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:370px ; left:850px;  ">
                            <input type="text" name="monto5" value="<?php echo $m5; ?>"/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:370px ; left:950px;    ">
                            <input type="text" name="" value=""/>
                        </td>
                    </tr>
                    <tr>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:390px ; left:610px">
                            <input type="text" name="fech6" value="<?php echo date("Y-m-d",strtotime($f1."+ 5 month"));  ?>"/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:390px ; left:700px; ">
                            <input type="text" name="seis" value=""/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:390px ; left:850px;  ">
                            <input type="text" name="monto6" value="<?php echo $m6; ?>"/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:390px ; left:950px;   ">
                            <input type="text" name="" value=""/>
                        </td>
                    </tr>
                    <tr>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:410px ; left:610px">
                            <input type="text" name="fech7" value="<?php echo date("Y-m-d",strtotime($f1."+ 6 month"));  ?>"/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:410px ; left:700px;  ">
                            <input type="text" name="siete" value=""/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:410px ; left:850px; ">
                            <input type="text" name="monto7" value="<?php echo $m7; ?>"/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:410px ; left:950px;   ">
                            <input type="text" name="" value=""/>
                        </td>
                    </tr>
                    <tr>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:430px ; left:610px">
                            <input type="text" name="fech8" value="<?php echo date("Y-m-d",strtotime($f1."+ 7 month"));  ?>"/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:430px ; left:700px; ">
                            <input type="text" name="ocho" value=""/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:430px ; left:850px; ">
                            <input type="text" name="monto8" value="<?php echo $m8; ?>"/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size22;  position:absolute; top:430px ; left:950px;  ">
                            <input type="text" name="" value=""/>
                        </td>
                    </tr>
                    <tr>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:450px ; left:610px">
                            <input type="text" name="fech9" value="<?php echo date("Y-m-d",strtotime($f1."+ 8 month"));  ?>"/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:450px ; left:700px;  ">
                            <input type="text" name="nueve" value=""/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:450px ; left:850px; ">
                            <input type="text" name="monto9" value="<?php echo $m9; ?>"/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:450px ; left:950px;   ">
                            <input type="text" name="" value=""/>
                        </td>
                    </tr>
                    <tr>
                         <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:470px ; left:610px">
                            <input type="text" name="fech10" value="<?php echo date("Y-m-d",strtotime($f1."+ 9 month"));  ?>"/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:470px ; left:700px; ">
                            <input type="text" name="diez" value=""/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:470px ; left:850px;  ">
                            <input type="text" name="monto10" value="<?php echo $m10; ?>"/>
                        </td>
                        <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:470px ; left:950px;   ">
                            <input type="text" name="" value=""/>
                        </td>
                    </tr>
                <tr>
                    <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:490px ; left:610px">
                        <input type="text" name="fech11" value="<?php echo date("Y-m-d",strtotime($f1."+ 10 month"));  ?>"/>
                    </td>
                    <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:490px ; left:700px; ">
                        <input type="text" name="once" value=""/>
                    </td>
                    <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:490px ; left:850px;  ">
                        <input type="text" name="monto11" value="<?php echo $m10; ?>"/>
                    </td>
                    <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:490px ; left:950px; ">
                        <input type="text" name="once" value=""/>
                    </td>
                </tr>
                <tr>
                                    
                    <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:510px ; left:610px">
                        <input type="text" name="fech11" value="<?php echo date("Y-m-d",strtotime($f1."+ 11 month"));  ?>"/>
                    </td>
                    <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:510px ; left:700px; ">
                        <input type="text" name="once" value=""/>
                    </td>
                    <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:510px ; left:850px;  ">
                        <input type="text" name="monto11" value="<?php echo $m10; ?>"/>
                    </td>              
                    <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:510px ; left:950px;   ">
                        <input type="text" name="" value=""/>
                    </td>                
                </tr>                           
                <tr>
                    <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:24;  border:0.0px; position:absolute; top:530px ; left:610px;  ">
                        GRACIAS POR SU CONFIANZA       TOTAL A PAGAR POLIZA<?php echo $costoTotal; ?>
                    </td> 
                </tr>                   
            </table>
        </center>
    </body>
</html>