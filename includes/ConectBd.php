<?php 
 $HostL  = "localhost"; // los datos del hosting 
 $UserL = "root"; // usuario del hosting
 $PasswordL = ""; // password del hosting
 $DataBase = "Ejemplo"; // bd a conectar
 $ConectionBd = mysqli_connect($HostL,$UserL, $PasswordL, $DataBase);
 if($ConectionBd->connect_errno){
    die('Error al conectar la base de datos con la aplicacion web'.$ConectionBd->connect_errno);
 }

?>