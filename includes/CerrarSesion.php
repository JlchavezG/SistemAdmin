<?php 
// recordar la sesion activa
session_start();
require "ConectBd.php";
$usuario = $_SESSION['Usuario'];
if(!isset($usuario)){
  header("location:index.php");
}
// consulta para extraer los datos del usuario conectado
$off = "SELECT * FROM Usuario  WHERE UserName = '$usuario'";
$Offl = $ConectionBd->query($off);
$offline = $Offl->fetch_array();
if($offline > 0){
$user = $offline;
$online = $user['Id_Usuario'];
$fuera = "UPDATE Usuario SET Online = '0' WHERE Id_Usuario = '$online'";
$Efuera = $ConectionBd->query($fuera);
}
session_unset();
session_destroy();
header("location:../index");

?>