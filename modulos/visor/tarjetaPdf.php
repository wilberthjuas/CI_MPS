
<?php
    
    /*require('../../libs/fpdf.php');
    require('../../libs/html2pdf.php');
    $pdf=new FPDF();
    $pdf=new PDF_HTML();
    $pdf->AddFont('BodoniMTCondensed','','bod_cr.php');
    $pdf->AddPage('L','Letter');
    $pdf->SetFont('BodoniMTCondensed','',14);*/

    require_once '../../vendor/autoload.php';
    
    use Dompdf\Dompdf;

    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    
    
    if (isset($_GET['n'])) {
        require_once('../../conexion/conexion.php');
        mysqli_select_db($conexion, $database);
        $poliza = $_GET['n'];
        $fileName = $poliza.'-'.date("Ymdhms").'.pdf';

        //$query1    = "SELECT * FROM datos WHERE folio='$a' ";

        //$result1 = mysqli_query($conexion,$query1);
        $html1 = file_get_contents("tarjeta.php");
    }
    else{
        $fileName = 'N-'.date("Ymdhms").'.pdf';
        $html1 = '<h1>Error al recuperar información.</h1>';
    }

    $dompdf->loadHtml($html1);

    $dompdf->setPaper('letter', 'landscape');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream($fileName,array("Attachment"=>1));

 ?>








