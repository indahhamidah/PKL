<?php 
require ('fpdf17/fpdf.php');
$pdf = new FPDF('P','mm','A4');
	
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(130, 5, 'Tipe', 1, 0);
$pdf->Output();
?>