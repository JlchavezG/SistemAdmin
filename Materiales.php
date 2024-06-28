<?php 
error_reporting(0);
require "includes/ConectBd.php";
require "includes/configuracion.php";
include "includes/consultas.php";

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
    <title> Materiales | SistemAdmin</title>
</head>
<!-- navbar-->
<body onload="mueveReloj()">
<?php include "process/navbar.php"; ?>
<!-- termina navbar -->
<!-- inicia menu -->
<?php 
 if($Tmenu == $Msistemas){include "process/MenuSistem.php";}
 else if($Tmenu == $MAdmin){include "process/MenuAdmin.php";}
 else if($Tmenu == $MUDocente){include "process/MenuUsuarios.php";}
 else if($Tmenu == $MAlumno){include "process/MenuAlumnos.php";}?>
<?php include 'process/MMateriales.php';?>
<!-- terminar el menu -->
<?php include "process/ModalNewMaterial.php"; ?>
<?php include "process/footer.php"; ?>
<script src="js/dark-mode.js"></script>
<script src="js/pace.js"></script>
</body>

</html>