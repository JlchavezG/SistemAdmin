<?php
error_reporting(0);
require "includes/ConectBd.php";
require "includes/configuracion.php";
include "includes/consultas.php";
require "library/phpqrcode/qrlib.php";
require "includes/Acciones.php";
if (isset($_POST['btn_newlab'])) {
    $NomLab = $ConectionBd->real_escape_string($_POST['NomLab']);
    $IPlantel = $ConectionBd->real_escape_string($_POST['Plantel']);
    $ILab = $ConectionBd->real_escape_string($_POST['Laboratorio']);
    // generar la validación y consulta del registro 
    // consulta para verificar si ya existe un laboratorio 
  $v = "SELECT * FROM Laboratorios WHERE NombreLaboratorio = '$NomLab' or Id_Plantel = $IPlantel";
  $Ev = $ConectionBd->query($v);
  if($Ev > 0){
    $MensjeLab.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Error! </strong> El Laboratorio a registrar ya existe dentro del plantel.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
  }
  else{
    // consulta para insertardatos en tabla laboratorios 
    $Ei = "INSERT INTO Laboratorios(NombreLaboratorio, Id_Plantel, Id_Carrera)VALUES('$NomLab','$IPlantel','$ILab')";
    $EEi = $ConectionBd->query($Ei);
    if($EEi > 0){
        $MensjeLab.="<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Execelnte! </strong> El Laboratorio a regstrar se ha registrado satisfactoriamente dentro del plantel.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                    header("refresh:3;NewLab.php");            
    }
  }



}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/dark.css">
    <link rel="stylesheet" type="text/css" href="css/pace.css">
    <link rel="stylesheet" type="text/css" href="css/Config.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.7.0.min.js"></script>
    <title>Nuevo Laboratorios | SistemAdmin</title>
</head>

<body>
    <?php include "process/navbar.php"; ?>
    <!-- termina navbar -->
    <!-- inicia menu -->
    <?php
    if ($Tmenu == $Msistemas) {
        include "process/MenuSistem.php";
    } else if ($Tmenu == $MAdmin) {
        include "process/MenuAdmin.php";
    } else if ($Tmenu == $MUDocente) {
        include "process/MenuUsuarios.php";
    } else if ($Tmenu == $MAlumno) {
        include "process/MenuAlumnos.php";
    } ?>
    <!-- terminar el menu -->
    <div class="container">
        <div class="row mt-4">
            <h3 class="text-center display-6 fs-5">Registro nuevo <span class="text-success">laboratorio</span></h3>
        </div>
        <div class="row mt-4">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <?php echo $MensjeLab; ?>
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-12-col-md-12 col-lg-12">
                            <input type="text" name="NomLab" id="NomLab" placeholder="Nombre de laboratorio" class="form-control">
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="row d-flex justify-content-center mt-2">
                <div class="col-sm-6-col-md-6 col-lg-6">
                    <select name="Plantel" id="Planetel" class="form-select">
                        <option value="">Selecciona un plantel</option>
                        <?php while ($LineaPlantel = $EPlanteles->fetch_assoc()) { ?>
                            <option value="<?php echo $LineaPlantel['Id_Plantel'] ?>"><?php echo $LineaPlantel['NombrePlantel']; ?></option>
                        <?php } ?>
                    </select>

                </div>
                <div class="col-sm-6-col-md-6 col-lg-6">
                    <select name="Carrera" id="Carrera" class="form-select">
                        <option value="">Selecciona una carrera</option>
                        <?php while ($LineaCarrera = $ECarreras->fetch_assoc()) { ?>
                            <option value="<?php echo $LineaCarrera['Id_Carrera'] ?>"><?php echo $LineaCarrera['NombreCarrera']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="d-grid gap-2">
                <input type="submit" value="Registrar" name="btn_newlab" class="btn btn-sm btn-outline-success rounded-pill ">
            </div>
        </div>
        </form>
        <hr>
        <div class="row mt-2">
            <div class="col"></div>
            <div class="col text-end">
                <svg class="bi" width="15" height="15" fill="currentColor">
                    <use xlink:href='library/icons/bootstrap-icons.svg#printer-fill' />
                </svg> Imprimir | 
                <svg class="bi" width="15" height="15" fill="currentColor">
                    <use xlink:href='library/icons/bootstrap-icons.svg#filetype-pdf' />
                </svg> Generar PDF |
                <svg class="bi" width="15" height="15" fill="currentColor">
                    <use xlink:href='library/icons/bootstrap-icons.svg#file-spreadsheet-fill' />
                </svg> Generar Excel
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-12-col-md-12 col-lg-12">
                <div class="table-responsive">
                    <table class="table ">
                        <thead class="bg-light">
                            <tr>
                                <th scope="col">Nombre de laboratorio</th>
                                <th scope="col">Plantel</th>
                                <th scope="col">Carrera</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($rowLabs = $EInnerLab->fetch_assoc()) { ?>
                                <tr class="bg-light">
                                    <th scope="row"><?php echo $rowLabs['NombreLaboratorio']; ?></th>
                                    <th scope="row"><?php echo $rowLabs['NombrePlantel']; ?></th>
                                    <th scope="row"><?php echo $rowLabs['NombreCarrera']; ?></th>
                                    <th class='bg-light' scope='row'>
                                        <a href="" class="text-success text-decoration-none">
                                            <svg class="bi" width="15" height="15" fill="currentColor">
                                                <use xlink:href='library/icons/bootstrap-icons.svg#pencil-fill' />
                                            </svg>
                                        </a> -
                                        <a href="" class="text-success text-decoration-none">
                                            <svg class="bi" width="15" height="15" fill="currentColor">
                                                <use xlink:href='library/icons/bootstrap-icons.svg#trash-fill' />
                                            </svg>
                                        </a>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php include "process/ModalSoporte.php"; ?>
    <?php include "process/footer.php"; ?>
    <script src="js/dark-mode.js"></script>
    <script src="js/pace.js"></script>
</body>

</html>