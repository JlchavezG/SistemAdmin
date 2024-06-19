<?php 
include "ConectBd.php";
$Id_Drop = $_GET['Id_Material'];
// consulta para eliminar usuario 
$eleiminar = "DELETE FROM Materiales WHERE Id_Material = $Id_Drop";
$eleiminarE = $ConectionBd->query($eleiminar);
if($eleiminarE > 0){
    header("location:../OptionMateriales");
}
?>