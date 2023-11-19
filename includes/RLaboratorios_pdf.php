<?php 
require_once("../library/fpdf/fpdf.php");
Class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../img/New_Logo_Gris_2023.png',225,5,35);
    $this->Ln();
    // Arial bold 15
    $this->SetFont('Arial','B',13);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(95,10,'Reporte de Laboratorios registrados en la plataforma',0,0,'C');
    // Salto de línea
    $this->Ln(30);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','B',10);
    $this->Cell(0,4,'www.iscjoseluischavezg.mx',0,1,'C');
    $this->SetFont('Arial','B',8);
    // Número de página
    $this->Cell(480,10,'Pagina: '.$this->PageNo().'/{nb}',0,0,'C');
}
}
session_start();
require 'ConectBd.php';
require 'consultas.php';
require 'configuracion.php';
session_start();
$fecha = date('d-m-Y');
$tiempo = date("H:m:s");
// Creación del objeto de la clase heredada
$pdf = new PDF('L','mm','Letter');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',9);
//$pdf->setXY(10,35);
$pdf->SetMargins(5,30,5);
$pdf->Cell(30,5,'Hora del reporte: '.$tiempo,0,0,'C');
$pdf->Cell(408,5,'Fecha: '.$fecha,0,1,'C');
$pdf->Cell(70,5,iconv('UTF-8','ISO-8859-2','Reporte Impreso por: '.$Perfil['Nombre'].' '.$Perfil['ApellidoP'].' '.$Perfil['ApellidoM']) ,0,1,'C');
$pdf->Cell(32,5,'Total de Registros:'.$Tlabs,0,0,'C');
$pdf->Ln(6);
$pdf->SetFillColor(227, 234, 240);
$pdf->SetDrawColor(61,61,61);
$pdf->SetTextColor(86, 87, 89);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(40,6,'Nombre del Laboratorio','B',0,'',1);
$pdf->Cell(40,6,'Nombre del plantel','B',0,'',1);
$pdf->Cell(40,6,'Nombre de la carrera','B',1,'',1);
while($row = $EInnerLab->fetch_assoc()){    
$pdf->Cell(40,6,iconv('UTF-8','ISO-8859-2',''.$row['NombreLaboratorio']),'B',0,'J');
$pdf->Cell(40,6,iconv('UTF-8','ISO-8859-2',''.$row['NombreCarrera']),'B',0,'J');
$pdf->Cell(40,6,iconv('UTF-8','ISO-8859-2',''.$row['NombrePlantel']),'B',1,'J');
}
$pdf->Ln();

$pdf->Output();
?>
