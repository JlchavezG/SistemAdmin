<?php
error_reporting(0);
require "includes/ConectBd.php";
require "includes/configuracion.php";
include "includes/consultas.php";
require "library/phpqrcode/qrlib.php";
require "includes/Acciones.php";
// total de paginas
$TPaginaLab = 5 ;
// dividir el paginador por los usuarios x pagina con usuarios totales
$paginasLab = $Tlabs / $TPaginaLab;
$paginasLab = ceil($paginasLab);
// calcular el numero de pagina segun los registros de la bd 
$iniciarLab = ($_GET['pagina']-1) * $TPaginaLab;
// validamos si no se presenta un metodo get iniciamos en el contador 1 
if(!$_GET){
    header('location:NewLab?pagina=1');
   }
   if($_GET['pagina'] > $paginasLab || $_GET['pagina'] <= 0){
    header('location:NewLab?pagina=1');
   }
// consulta para extraer los datos de laboratorios con pagina
$PagLab = "SELECT L.Id_Laboratorio, L.NombreLaboratorio, L.Id_Plantel , L.Id_carrera, PL.Id_Plantel, PL.NombrePlantel, CA.Id_Carrera, CA.NombreCarrera 
FROM Laboratorios L INNER JOIN Plantel PL ON L.Id_Plantel = PL.Id_Plantel INNER JOIN Carreras CA ON L.Id_carrera = CA.Id_Carrera  LIMIT ".$paginasLab.",".$TPaginaLab;
$EjePagLab = $ConectionBd->query($PagLab);

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
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="needs-validation" novalidate">
                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-12-col-md-12 col-lg-12">
                            <input type="text" name="NomLab" id="NomLab" placeholder="Nombre de laboratorio" class="form-control" required>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="row d-flex justify-content-center mt-2">
                <div class="col-sm-6-col-md-6 col-lg-6">
                    <select name="Plantel" id="Planetel" class="form-select" required>
                        <option value="">Selecciona un plantel</option>
                        <?php while ($LineaPlantel = $EPlanteles->fetch_assoc()) { ?>
                            <option value="<?php echo $LineaPlantel['Id_Plantel'] ?>"><?php echo $LineaPlantel['NombrePlantel']; ?></option>
                        <?php } ?>
                    </select>

                </div>
                <div class="col-sm-6-col-md-6 col-lg-6">
                    <select name="Carrera" id="Carrera" class="form-select" required>
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
                <a href="includes/RLaboratorios_pdf.php" target="_blank" class="text-decoration-none text-success">
                <svg class="bi" width="15" height="15" fill="currentColor">
                    <use xlink:href='library/icons/bootstrap-icons.svg#filetype-pdf' />
                </svg> Generar PDF |
                </a>
                <a href="includes/RLab_Excel.php" class="text-decoration-none text-success">
                    <svg class="bi" width="15" height="15" fill="currentColor">
                        <use xlink:href='library/icons/bootstrap-icons.svg#file-spreadsheet-fill' />
                    </svg> Generar Excel
                </a>
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
                            <?php while ($rowLabs = $EjePagLab->fetch_assoc()) { ?>
                                <tr class="bg-light">
                                    <th scope="row"><?php echo $rowLabs['NombreLaboratorio']; ?></th>
                                    <th scope="row"><?php echo $rowLabs['NombrePlantel']; ?></th>
                                    <th scope="row"><?php echo $rowLabs['NombreCarrera']; ?></th>
                                    <th class='bg-light' scope='row'>
                                        <a href="EditarLab.php?Id_Laboratorio=<?php echo $rowLabs['Id_Laboratorio']; ?>" class="text-success text-decoration-none">
                                            <svg class="bi" width="15" height="15" fill="currentColor">
                                                <use xlink:href='library/icons/bootstrap-icons.svg#pencil-fill' />
                                            </svg>
                                        </a> -
                                        <a href="..includes/eliminar_lab.php?Id_Laboratorio=<?php echo $rowLabs['Id_Laboratorio']; ?>" class="text-success text-decoration-none">
                                            <svg class="bi" width="15" height="15" fill="currentColor">
                                                <use xlink:href='library/icons/bootstrap-icons.svg#trash-fill' />
                                            </svg>
                                        </a>
                                    </th>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item <?php echo $_GET['pagina'] <= 1 ? 'disabled' : '' ?>">
                      <a class="page-link" href="NewLab?pagina=<?php echo $_GET['pagina']-1; ?>" tabindex="-1" aria-disabled="true">
                        Anterior
                      </a>
                   </li>
                   <!-- se crea ciclo for para obtener el numero paginacion -->
                   <?php for($i = 0; $i<$paginasLab; $i++):?>
                   <li class="page-item <?php echo $_GET['pagina'] == $i+1 ? 'active' : '' ?>">
                    <a class="page-link" href="NewLab?pagina=<?php echo $i+1;  ?>">
                        <?php echo $i+1;  ?>
                    </a>
                   </li>
                   <!-- termina ciclo for -->
                   <?php endfor ?>
                    <!-- detectamos la pagina para siguiente con un get y asignamos la clase disabled al paginador -->
                   <li class="page-item <?php echo $_GET['pagina'] >= $paginasLab ? 'disabled' : '' ?>">
                    <a class="page-link" href="NewLab?pagina=<?php echo $_GET['pagina']+1; ?>">Siguiente</a>
                   </li>
                </ul>
            </nav>
        </div>
    </div>
    <?php include "process/ModalSoporte.php"; ?>
    <?php include "process/footer.php"; ?>
    <script src="js/dark-mode.js"></script>
    <script src="js/pace.js"></script>
    <script type='text/javascript'>
        $(function() {
        $(document).bind("contextmenu", function(e) {
            return false;
        });
        });
    </script>
    <script>
        function imprSelec(Usuarios){
            var ficha=document.getElementById(Usuarios);
            var ventimp=window.open(' ','popimpr');
            ventimp.document.write(ficha.innerHTML);
            ventimp.document.close();
            ventimp.print();
            ventimp.close();
        }
    </script>
</body>

</html>