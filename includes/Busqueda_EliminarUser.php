<?php 
include "ConectBd.php";
$Id_DropUser = $_GET['Id_Usuario'];
$eleiminarUser = "DELETE FROM Usuario WHERE Id_Usuario = $Id_DropUser";
$eleiminarUserB = $ConectionBd->query($eleiminarUser);
if($eleiminarUserB > 0){
    $TipoMensaje.= "<div class='row mt-5'>
                        <div class='col-sm-10 col-md-10 col-lg-10 text-center'>
                            <div class='alert alert-success' role='alert'>
                                El Usuario se elimino satisfactoriamente de la plataforma.
                            </div>
                        </div>
                    </div>";
    echo $TipoMensaje;                
    header("refresh:3;../BuscarUsuarios.php"); 
}
?>