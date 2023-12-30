<?php
error_reporting(0);
require "includes/ConectBd.php";
require "includes/configuracion.php";
include "includes/consultas.php";
require "includes/Acciones.php";
// variable para determinar el nuemero de usuarios por paginacion 
$TPagina = 5;
// determinar el numero de registros de usuarios dentro de la bd
$TusuariosBd = $EjecutaUserG->num_rows;
// dividir el paginador por los usuarios x pagina con usuarios totales
$paginas = $TusuariosBd / $TPagina;
// redondear hacia arriba la divicion
$paginas = ceil($paginas);
// calcular el numero de pagina segun los registros de la bd 
$iniciar = ($_GET['pagina']-1) * $TPagina;

// validamos si no se presenta un metodo get iniciamos en el contador 1 
if(!$_GET){
 header('location:OptionUser?pagina=1');
}
if($_GET['pagina'] > $paginas || $_GET['pagina'] <= 0){
 header('location:OptionUser?pagina=1');
}
// consultas para desarrollar paginacion en usuarios 
// obtener todos los datos de los usuarios con iner join con el limite de usuario por pagina
$UsuariosPag = "SELECT U.Id_Usuario, U.Nombre, U.ApellidoP, U.ApellidoM, U.Telefono, U.Email,
U.Id_Plantel, U.Id_TUsuario, U.UserName, U.FechaReg ,U.Password, U.Online, U.EstatusUser,
U.ImgUser, P.Id_Plantel, P.NombrePlantel, P.DireccionPlantel, P.EmailPlantel, 
TU.Id_TUsuario, TU.NTUsuario, ES.Id_EstatusUser, ES.DEstatusUser FROM Usuario U INNER JOIN
Plantel P ON U.Id_Plantel =P.Id_Plantel INNER JOIN TUsuario TU ON U.Id_TUsuario = TU.Id_TUsuario 
INNER JOIN EstatusUser ES ON U.EstatusUser = ES.Id_EstatusUser ORDER BY U.Nombre ASC LIMIT ".$iniciar.",".$TPagina;
$EjUsuarios = $ConectionBd->query($UsuariosPag);
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
                <a href="UsuariosSistem" class="text-decoration-none text-success">
                 <svg class='bi text-success' width='20' height='20' fill='currentColor'>
                    <use xlink:href='library/icons/bootstrap-icons.svg#arrow-left-circle'/> 
                 </svg> <span>Regresar a Usuarios</span>
                 </a>
               </div>
               <div class="row mt-2">
                 <span class="text-end">
                    <a href="javascript:imprSelec('Usuarios')" class="text-decoration-none">
                        <svg class='bi text-success' width='20' height='20' fill='currentColor'>
                             <use xlink:href='library/icons/bootstrap-icons.svg#printer-fill'/> 
                        </svg>
                    </a> Imprimir 
                 </span>
               </div>
            </div>
            <div class='table-responsive container mt-3 mb-3' id="Usuarios">
                <div class='col-sm-12 col-md-12 col-lg-12 mt-3'>
                    <table class='table'>
                        <thead class='bg-light'>
                            <tr>
                                <th class='bg-light' scope='col'>Imagen</th>
                                <th class='bg-light' scope='col'>Nombre</th>
                                <th scope='col'>ApellidoPaterno</th>
                                <th scope='col'>ApellidoMaterno</th>
                                <th scope='col'>Telefono</th>
                                <th scope='col'>Email</th>
                                <th scope='col'>Plantel_Inscrito</th>
                                <th scope='col'>TipodeUsuario</th>
                                <th scope='col'>UserName</th>
                                <th scope='col'>FechadeRegistro</th>
                                <th scope='col'>Online</th>
                                <th scope='col'>Estatus</th>
                                <th scope='col'>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <div class="container">
                                <?php while ($LineaDatos = $EjUsuarios->fetch_assoc()) { ?>
                                    <tr>
                                        <td class='bg-light text-center' scope='row'><img src="img/Users/<?php echo $LineaDatos['ImgUser']; ?>" style="width: 30px; height: 30px;" class="rounded-circle"></td>
                                        <td class='bg-light' scope='row'><?php echo $LineaDatos['Nombre']; ?></td>
                                        <td class='bg-light' scope='row'><?php echo $LineaDatos['ApellidoP']; ?></td>
                                        <td class='bg-light' scope='row'><?php echo $LineaDatos['ApellidoM']; ?></td>
                                        <td class='bg-light' scope='row'><?php echo $LineaDatos['Telefono']; ?></td>
                                        <td class='bg-light' scope='row'><?php echo $LineaDatos['Email']; ?></td>
                                        <td class='bg-light' scope='row'><?php echo $LineaDatos['NombrePlantel']; ?></td>
                                        <td class='bg-light' scope='row'><?php echo $LineaDatos['NTUsuario']; ?></td>
                                        <td class='bg-light' scope='row'><?php echo $LineaDatos['UserName']; ?></td>
                                        <td class='bg-light' scope='row'><?php echo $LineaDatos['FechaReg']; ?></td>
                                        <?php if ($LineaDatos['Online'] == $On) {
                                            $IconOn = "<svg class='bi text-success' width='15' height='15' fill='currentColor'>
                                                         <use xlink:href='library/icons/bootstrap-icons.svg#circle-fill'/> 
                                                       </svg>";
                                        } else {
                                            $IconOn = "<svg class='bi text-danger' width='15' height='15' fill='currentColor'>
                                                         <use xlink:href='library/icons/bootstrap-icons.svg#circle'/> 
                                                       </svg>";
                                        } ?>
                                        <td class="bg-light text-center" scope="row"> <?php echo $IconOn; ?></td>
                                        <td class='bg-light' scope='row'><?php echo $LineaDatos['DEstatusUser']; ?></td>
                                        <td class="bg-light" scope="row">
                                            <a href='EditarUser?Id_Usuario=<?php echo $LineaDatos['Id_Usuario']; ?>"' class='text-success text-decoration-none'>
                                                <svg class='bi' width='15' height='15' fill='currentColor'>
                                                    <use xlink:href='library/icons/bootstrap-icons.svg#pencil-fill' />
                                                </svg>
                                            </a> -
                                            <a href="includes/Busqueda_EliminarUser.php?Id_Usuario=<?php echo $LineaDatos['Id_Usuario']; ?>" class="text-success text-decoration-none">
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
                      <a class="page-link" href="OptionUser?pagina=<?php echo $_GET['pagina']-1; ?>" tabindex="-1" aria-disabled="true">
                        Anterior
                      </a>
                   </li>
                   <!-- se crea ciclo for para obtener el numero paginacion -->
                   <?php for($i = 0; $i<$paginas; $i++):?>
                   <li class="page-item <?php echo $_GET['pagina'] == $i+1 ? 'active' : '' ?>">
                    <a class="page-link" href="OptionUser?pagina=<?php echo $i+1;  ?>">
                        <?php echo $i+1;  ?>
                    </a>
                   </li>
                   <!-- termina ciclo for -->
                   <?php endfor ?>
                   <!-- detectamos la pagina para siguiente con un get y asignamos la clase disabled al paginador -->
                   <li class="page-item <?php echo $_GET['pagina'] >= $paginas ? 'disabled' : '' ?>">
                    <a class="page-link" href="OptionUser?pagina=<?php echo $_GET['pagina']+1; ?>">Siguiente</a>
                   </li>
                </ul>
            </nav>
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