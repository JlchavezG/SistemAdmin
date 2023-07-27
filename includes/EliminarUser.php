<?php 
include "ConectBd.php";
$Id_Drop = $_GET['Id_Usuario'];
// consulta para eliminar usuario 
$eleiminar = "DELETE FROM Usuario WHERE Id_Usuario = $Id_Drop";
$eleiminarE = $ConectionBd->query($eleiminar);
if($eleiminarE > 0){
    header("location:../UsuariosOpciones.php");
}
?>