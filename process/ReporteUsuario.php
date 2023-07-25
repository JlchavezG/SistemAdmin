<?php 
include "../includes/ConectBd.php";
include "../includes/consultas.php";
include "../includes/configuracion.php";
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
        <div class="row mt-3 justify-content-center">
            <div class="col-sm-10 col-md-10 col-lg-10">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <img src="../img/New_Logo_Gris_2023.png" alt="Logotipo" class="img-fluid" style="width:150px;">
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-8">
                            <div class="card shadow py-2">
                                <span class="text-center text-muted py-2"> Reporte de usuarios registrados dentro de la plataforma</span><hr>
                                <div class="row justiy-content-center">
                                    <div class="col-sm-6 col-md-6 col-lg-6 ">
                                        <span class="mx-4 text-muted fw-lighter">Usuario: <?php echo $Perfil['Nombre']." ".$Perfil['ApellidoP']." ".$Perfil['ApellidoM'];?></span>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <span class="fw-lighter">Fecha de reporte: <?php $FechaR = date('d-m-y'); echo $FechaR; ?></span>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
    </div>            
                <div class="row mt-4">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="row mt-2">
                            <div class="card shadow">
                                <div class="justify-content-center">
                                <div class="">
                        <div class="table">
                        <table class="table table-bordered table-sm">
                                <thead class="bg-light">
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">ApellidoP</th>
                                        <th scope="col">ApellidoM</th>
                                        <th scope="col">Telefono</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">PlantelAsignado</th>
                                        <th scope="col">TipoUsuario</th>
                                        <th scope="col">UserName</th>
                                        <th scope="col">FechaRegistro</th>
                                        <th scope="col">Online</th>
                                        <th scope="col">Estatus</th>

                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <?php while($row = $EjecutaUserG->fetch_assoc()) { ?>
                                    <td scope="row" class="align-middle"><?php echo $row['Nombre']; ?></td>
                                    <td scope="row" class="align-middle"><?php echo $row['ApellidoP']; ?></td>
                                    <td scope="row" class="align-middle"><?php echo $row['ApellidoM']; ?></td>
                                    <td scope="row" class="align-middle"><?php echo $row['Telefono']; ?></td>
                                    <td scope="row" class="align-middle"><?php echo $row['Email']; ?></td>
                                    <td scope="row" class="align-middle"><?php echo $row['NombrePlantel']; ?></td>
                                    <td scope="row" class="align-middle"><?php echo $row['NTUsuario']; ?></td>
                                    <td scope="row" class="align-middle"><?php echo $row['UserName']; ?></td>
                                    <td scope="row" class="align-middle"><?php echo $row['FechaReg']; ?></td>
                                        <?php $On = 1; if($row['Online'] == $On){
                                            $IconOn = "<svg class='bi text-success' width='15' height='15' fill='currentColor'>
                                                        <use xlink:href='../library/icons/bootstrap-icons.svg#circle-fill'/> 
                                                    </svg>";
                                            }
                                            else{
                                            $IconOn = "<svg class='bi text-danger' width='15' height='15' fill='currentColor'>
                                                        <use xlink:href='../library/icons/bootstrap-icons.svg#circle'/> 
                                                    </svg>";
                                            } ?>
                                    <td scope="row" class="align-middle"><?php echo $IconOn; ?></td>
                                    <td scope="row" class="align-middle"><?php echo $row['DEstatusUser']; ?></td>
                                    
                                    </tr>  
                                    <?php } ?>
                                </tbody>
                                
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="container mt-4">
    <div class="row mt-3">
            <span class="text-center text-muted">SistemAdmin | IscjlchavezG</span>
     </div>
</div>
</body>
</html>
<?php 
$html = ob_get_clean();
 echo $html;
require_once("../library/dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);
$dompdf->loadHtml($html);
$dompdf->setPaper('A4','Landscape');
//$dompdf->setPaper('latter');


$dompdf->render();
$dompdf->stream("Reporte_Usuarios_sistemas.pdf", array("Attachment" => false));
?>