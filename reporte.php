<?php
include "metodos.php";
require 'fpdf/fpdf.php';
$pdf = new FPDF();  //crear obj. de la clase PDF
$pdf->AddPage();
$pdf->SetMargins(20, 40, 30); //margenes izquierda, arriba y derecha
$pdf->SetFillColor(232, 232, 232); //relleno de la celda
$pdf->Ln(); //salto de linea
// $pdf->Image("imagen/clientes.gif", 150, 05, 50, 30, 'gif'); //ubic. de la imagen, margen izq., supe., ancho, alto, extens.
$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(200, 20, "Listado de clientes", 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 9);
$pdf->Ln(); //salto de linea
$pdf->Cell(30, 6, 'DOCUMENTO', 1, 0, 'C');
$pdf->Cell(40, 6, 'NOMBRE', 1, 0, 'C');
$pdf->Cell(30, 6, 'APELLIDO', 1, 0, 'C');
$pdf->Cell(50, 6, 'DIRECCION', 1, 0, 'C');
$pdf->Cell(20, 6, 'TELEFONO', 1, 0, 'C');

$pdf->SetFont('Arial','',10);

$obj = new Metodos();
$lista = $obj->reporteCliente(); //reutilizamos los metodos existentes
foreach ($lista as $campos) {
    $pdf->Ln(); //salto de linea
    $pdf->Cell(30, 6, $campos['ci'], 1, 0, 'C');
    $pdf->Cell(40, 6, $campos['nombre'], 1, 0, 'C');
    $pdf->Cell(30, 6, $campos['apellido'], 1, 0, 'C');
    $pdf->Cell(50, 6, $campos['direccion'], 1, 0, 'C');
    $pdf->Cell(20, 6, $campos['telefono'], 1, 0, 'C');
}
ob_end_clean(); //limpia el buffer de salida
$pdf->Output(); //salida

?>
