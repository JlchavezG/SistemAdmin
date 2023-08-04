<?php 
require('../library/fpdf/fpdf.php'); 
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../img/craken.png',225,5,35);
    $this->Ln();
    // Arial bold 15
    $this->SetFont('Arial','B',13);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(90,25,'Reporte de Oficios registrados en la plataforma',0,0,'C');
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
session_start();
$fecha = date('d-m-Y');
$tiempo = date("H:m:s");
// Creación del objeto de la clase heredada
$pdf = new PDF('L','mm','Letter');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',9);
//$pdf->setXY(10,35);
$pdf->SetTopMargin(30);
$pdf->Cell(40,5,'Hora del reporte: '.$tiempo,0,0,'C');
$pdf->Cell(390,5,'Fecha: '.$fecha,0,1,'C');
$pdf->Cell(32,5,'Total de Registros: 1',0,0,'C');
$pdf->Ln(6);
$pdf->SetFillColor(227, 234, 240);
$pdf->SetDrawColor(61,61,61);
$pdf->SetTextColor(86, 87, 89);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,6,'Nombre','B',0,'',1);
$pdf->Cell(22,6,'APaterno','B',0,'',1);
$pdf->Cell(22,6,'AMaterno','B',0,'',1);
$pdf->Cell(26,6,'Telefono','B',0,'',1);
$pdf->Cell(47,6,'Email','B',0,'',1);
$pdf->Cell(23,6,'Plantel','B',0,'',1);
$pdf->Cell(32,6,'Tipo de Usuario','B',0,'',1);
$pdf->Cell(20,6,'UserName','B',0,'',1);
$pdf->Cell(32,6,'Fecha de Registro','B',0,'',1);
$pdf->Cell(20,6,'Online','B',1,'',1);
while($row = $EjecutaUserG->fetch_assoc()){    
$pdf->Cell(20,6,iconv('UTF-8','ISO-8859-2','Nombre'),'B',0,'J');
$pdf->Cell(22,6,iconv('UTF-8','ISO-8859-2','ApellidoP'),'B',0,'J');
$pdf->Cell(22,6,iconv('UTF-8','ISO-8859-2','ApellidoM'),'B',0,'J');
$pdf->Cell(26,6,'Telefono','B',0,'J');
$pdf->Cell(47,6,'Email','B',0,'J');
$pdf->Cell(23,6,'FNac','B',0,'J');
$pdf->Cell(32,6,'Calle','B',0,'J'); 
$pdf->Cell(20,6,'Numero','B',0,'J');
$pdf->Cell(32,6,'Colonia','B',0,'J');  
$pdf->Cell(20,6,iconv('UTF-8','ISO-8859-2','NombreE'),'B',1,'J');                   
}
$pdf->Ln();

$pdf->Output();
?>
