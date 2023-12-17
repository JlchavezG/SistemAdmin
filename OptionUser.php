<?php
error_reporting(0);
require "includes/ConectBd.php";
require "includes/configuracion.php";
include "includes/consultas.php";
require "includes/Acciones.php";
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
    <title>Perfil de Usuario | SistemAdmin</title>
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
            <div class="row mt-1">
               <div class="text-star mt-2">
                <a href="UsuariosSistem" class="text-decoration-none text-success">
                 <svg class='bi text-success' width='20' height='20' fill='currentColor'>
                    <use xlink:href='library/icons/bootstrap-icons.svg#arrow-left-circle'/> 
                 </svg> <span>Regresar a Usuarios</span>
                 </a>
               </div>
            </div>
            <div class='table-responsive container mt-3 mb-3'>
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
                                <th scope='col'>UserName</th>
                                <th scope='col'>FechadeRegistro</th>
                                <th scope='col'>Online</th>
                                <th scope='col'>Opcione</th>
                            </tr>
                        </thead>
                        <tbody>
                            <div class="container">
                                <?php while ($LineaDatos = $EUsuario->fetch_assoc()) { ?>
                                    <tr>
                                        <td class='bg-light text-center' scope='row'><img src="img/Users/<?php echo $LineaDatos['ImgUser']; ?>" style="width: 30px; height: 30px;" class="rounded-circle"></td>
                                        <td class='bg-light' scope='row'><?php echo $LineaDatos['Nombre']; ?></td>
                                        <td class='bg-light' scope='row'><?php echo $LineaDatos['ApellidoP']; ?></td>
                                        <td class='bg-light' scope='row'><?php echo $LineaDatos['ApellidoM']; ?></td>
                                        <td class='bg-light' scope='row'><?php echo $LineaDatos['Telefono']; ?></td>
                                        <td class='bg-light' scope='row'><?php echo $LineaDatos['Email']; ?></td>
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
                   <li class="page-item">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                   </li>
                   <li class="page-item">
                    <a class="page-link" href="#">1</a>
                   </li>
                   <li class="page-item">
                    <a class="page-link" href="#">2</a>
                   </li>
                   <li class="page-item">
                    <a class="page-link" href="#">3</a>
                   </li>
                   <li class="page-item">
                    <a class="page-link" href="#">Next</a>
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
            <script src="js/dark-mode.js"></script>
            <script src="js/pace.js"></script>
</body>

</html>