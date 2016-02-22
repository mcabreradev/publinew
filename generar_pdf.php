
<?php
  session_start();
  ?>

<?php

//incluimos la libreria tcpdf
include "tcpdf/tcpdf.php";
include "conexionDB.php";


//creamos una instancia del documento pdf
$pdf=new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

//Defino los atributos generales del pdf
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('PubliNew');
$pdf->SetTitle('Lista');

//Defino el tipo de letra para el documento
$pdf->SetFont('dejavusans', '', 12);

//Agrego la pagina inicial
$pdf->AddPage();
//Construccion del PDF
$pdf->SetFont('dejavusans', 'B', 12);
$pdf->Cell(0, 0, "LISTA DE PERSONAS", 0, 0, 'C');
$sql = "SELECT * FROM registro";
$registro = ejecutar($sql);
$i = 0;
//Nueva linea
$pdf->Ln(20);
//Defino los encabezados de la tabla
$pdf->Cell(10, 0, "usuario", 1, 0, 'C');
$pdf->Cell(35, 0, "nombre", 1, 0);
$pdf->Cell(80, 0, "email", 1, 0);
$pdf->Cell(0, 0, "cedula", 1, 0);
$pdf->SetFont('dejavusans', '', 12);
//parametros del metodo Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')

while($registro=mysqli_fetch_assoc($registro)){

    $pdf->Ln();
    $pdf->Cell(10, 0, $i++, 1, 0, 'C');
    $pdf->Cell(35, 0, $registro['nombre'],0,"",".", 1, 0,'R');
    $pdf->Cell(80, 0, $registro['apellido'], 1, 0);
    $pdf->Cell(0, 0, $registro['email'], 1, 0);
}
//Genero la salida del pdf
$pdf->Output('lista.pdf', 'I');

?>


