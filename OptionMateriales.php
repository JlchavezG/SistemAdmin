<?php
error_reporting(0);
require "includes/ConectBd.php";
require "includes/configuracion.php";
include "includes/consultas.php";
require "includes/Acciones.php";
// variable para determinar el nuemero de usuarios por paginacion 
$TPagina = 5;
// dividir el paginador por los usuarios x pagina con usuarios totales
$paginas = $TotalMateriales / $TPagina;
// redondear hacia arriba la divicion
$paginas = ceil($paginas);
// calcular el numero de pagina segun los registros de la bd 
$iniciar = ($_GET['pagina']-1) * $TPagina;

// validamos si no se presenta un metodo get iniciamos en el contador 1 
if(!$_GET){
 header('location:OptionMateriales?pagina=1');
}
if($_GET['pagina'] > $paginas || $_GET['pagina'] <= 0 ){
 header('location:OptionMateriales?pagina=1');
}
// consultas para desarrollar paginacion en materiales 
// obtener todos los datos de los usuarios con iner join con el limite de Materiales por pagina


$MaterialesP ="SELECT M.Id_Material, M.NomMaterial, M.DescripMaterial, M.Id_CatMaterial, M.Cantidad, M.Stok, M.ImgMaterial, 
C.Id_Categoria, C.NombreCate FROM Materiales M INNER JOIN CategoriaMaterial C ON M.Id_CatMaterial = C.Id_Categoria ORDER BY M.NomMaterial ASC LIMIT ".$iniciar.",".$TPagina;
$EjMateriales = $ConectionBd->query($MaterialesP);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/dark.css">
    <link rel="stylesheet" type="text/css" href="css/pace.css">
    <link rel="stylesheet" type="text/css" href="css/Config.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.7.0.min.js"></script>
    <title>Opciones de usuarios | SistemAdmin</title>
</head>
<!-- navbar-->

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
        <div class="row d-flex justify-content-center">
            <div class="row mt-3">
               <div class="text-star mt-2">
                <a href="Materiales" class="text-decoration-none text-success">
                 <svg class='bi text-success' width='20' height='20' fill='currentColor'>
                    <use xlink:href='library/icons/bootstrap-icons.svg#arrow-left-circle'/> 
                 </svg> <span>Regresar a Materiales</span>
                 </a>
               </div>
               <div class="row mt-2">
                 <span class="text-end">
                    <a href="javascript:imprSelec('Usuarios')" class="text-decoration-none">
                        <svg class='bi text-success' width='20' height='20' fill='currentColor'>
                             <use xlink:href='library/icons/bootstrap-icons.svg#printer-fill'/> 
                        </svg>
                    </a> Imprimir |
                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#AyudaOptionMateriales" aria-controls="AyudaOptionMateriales" class="text-decoration-none text-success">
                         <svg class="bi" width="18" height="18" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#question-circle" />
                         </svg>
                    </a> Ayuda soporte
                 </span>
               </div>
            </div>
            <div class='table-responsive container mt-3 mb-3' id="Usuarios">
                <div class='col-sm-12 col-md-12 col-lg-12 mt-3'>
                    <table class='table'>
                        <thead class='bg-light'>
                            <tr>
                                <th class='bg-light' scope='col'>Imagen</th>
                                <th class='bg-light' scope='col'>Nombre Material</th>
                                <th scope='col'>Descripcion</th>
                                <th scope='col'>Categoria</th>
                                <th scope='col'>Cantidad</th>
                                <th scope='col'>Stock</th>
                                <th scope='col'>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <div class="container">
                                <?php while ($LineaDatos = $EjMateriales ->fetch_assoc()) { ?>
                                    <tr>
                                        <td class='bg-light text-center' scope='row'><img src="img/materiales/<?php echo $LineaDatos['ImgMaterial']; ?>" style="width: 50px; height: 50px;" class="rounded-circle"></td>
                                        <td class='bg-light' scope='row'><?php echo $LineaDatos['NomMaterial']; ?></td>
                                        <td class='bg-light' scope='row'><?php echo $LineaDatos['DescripMaterial']; ?></td>
                                        <td class='bg-light' scope='row'><?php echo $LineaDatos['NombreCate']; ?></td>
                                        <td class='bg-light text-center' scope='row'><?php echo $LineaDatos['Cantidad']; ?></td>
                                        <td class='bg-light text-center' scope='row'><?php echo $LineaDatos['Stok']; ?></td>
                                        <td class="bg-light" scope="row">
                                            <a href='EditarMateriales?Id_Material=<?php echo $LineaDatos['Id_Material']; ?>' class='text-success text-decoration-none'>
                                                <svg class='bi' width='15' height='15' fill='currentColor'>
                                                    <use xlink:href='library/icons/bootstrap-icons.svg#pencil-fill' />
                                                </svg>
                                            </a> -
                                            <a href="includes/EliminarMaterial.php?Id_Material=<?php echo $LineaDatos['Id_Material']; ?>" class="text-success text-decoration-none">
                                                <svg class="bi" width="15" height="15" fill="currentColor">
                                                    <use xlink:href="library/icons/bootstrap-icons.svg#trash-fill" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </div>    
                        </tbody>
                    </table>
                </div>
            </div>
         </div>
         <div class="row mt-2">
             <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                   <!-- detectamos la pagina anterior con un get y asignamos la clase disabled al paginador -->
                   <li class="page-item <?php echo $_GET['pagina'] <= 1 ? 'disabled' : '' ?>">
                      <a class="page-link" href="OptionMateriales?pagina=<?php echo $_GET['pagina']-1; ?>" tabindex="-1" aria-disabled="true">
                        Anterior
                      </a>
                   </li>
                   <!-- se crea ciclo for para obtener el numero paginacion -->
                   <?php for($i = 0; $i<$paginas; $i++):?>
                   <li class="page-item <?php echo $_GET['pagina'] == $i+1 ? 'active' : '' ?>">
                    <a class="page-link" href="OptionMateriales?pagina=<?php echo $i+1;  ?>">
                        <?php echo $i+1;  ?>
                    </a>
                   </li>
                   <!-- termina ciclo for -->
                   <?php endfor ?>
                   <!-- detectamos la pagina para siguiente con un get y asignamos la clase disabled al paginador -->
                   <li class="page-item <?php echo $_GET['pagina'] >= $paginas ? 'disabled' : '' ?>">
                    <a class="page-link" href="OptionMateriales?pagina=<?php echo $_GET['pagina']+1; ?>">Siguiente</a>
                   </li>
                </ul>
            </nav>
         </div>
    </div>
    <!-- offcanva de ayuda  -->
    <div class="offcanvas offcanvas-end bg-light" tabindex="-1" id="AyudaOptionMateriales" aria-labelledby="AyudaOptionUserLabel">
        <div class="offcanvas-header">
            <h5 id="AyudaOptionUserLabel">
                <svg class='bi' width='25' height='25' fill='currentColor'>
                    <use xlink:href='library/icons/bootstrap-icons.svg#question-circle' />
                </svg> Opciones de Materiales
            </h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
        <ul class="list-group list-group-flush">
           <li class="list-group-item bg-light text-success">1.- Selecciona la opcion para editar los datos del material y/o eliminar los datos del material seleccionado.</li>
           <li class="list-group-item bg-light text-success">2.- En editar podras modificar datos registrados, Noombre del material, Descripcion, Categoria, Existencias, Stock.</li>
           <li class="list-group-item bg-light text-success">3.- En eliminar material se eliminara todo dato y registro del mismo en la plataforma.</li>
        </ul>
        </div>
    </div>
    <?php include "process/footer.php"; ?>
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
    <script src="js/dark-mode.js"></script>
    <script src="js/pace.js"></script>
</body>

</html>