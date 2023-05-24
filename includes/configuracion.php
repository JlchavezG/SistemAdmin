<?php 
// eliminar alertas no deseadas 
error_reporting(0);
// recordar la sesion 
session_start();
// validar que el usuari pase por el login 
$usuario = $_SESSION['Usuario'];
if(!isset($usuario)){
header("location:index.php");
}

?>