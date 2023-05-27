<?php 
error_reporting(0);
require "includes/ConectBd.php";
require "includes/configuracion.php";

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
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.7.0.min.js"></script>
    <title>Inicio de Sistema | Dashboard SistemAdmin</title>
</head>
<!-- navbar-->
<body>
<?php include "process/navbar.php"; ?>
<!-- termina navbar -->
<!-- inicia menu -->
<?php include "process/MenuSistem.php"; ?>
<!-- terminar el menu -->
<?php include "process/ModalSoporte.php"; ?>
<script src="js/dark-mode.js"></script>
<script src="js/pace.js"></script>
</body>

</html>