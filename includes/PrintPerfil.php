<?php 
include "../includes/ConectBd.php";
include "../includes/configuracion.php";
require_once('../library/tcpdf/tcpdf.php');
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('SistemAdmin | IscjlchavezG');
$pdf->SetTitle('Perfil de Usuario');
$pdf->SetSubject('Información de Usuario');
$pdf->SetKeywords('SistemAdmin, IscjlchavezG, datos de Perfil, PDF');


?>