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
// configurar la zona horaria de nuestro servidor
ini_Set('date.timezone','America/Mexico_City');
$fecha = date('Y-m-d');
$tiempo = date('H:i:s');
$hora = date('H');
$Accion = "Ingreso a la plataforma";
$Accion2 = "Salida de la plataforma";
// consulta para extraer los datos del usuario conectado  actualizando el campo Online a 1
$consulta = "SELECT * FROM Usuario WHERE UserName = '$usuario'";
$r = $ConectionBd->query($consulta);
$extraer = $r->fetch_array();
if($extraer > 0){
  $user = $extraer;
  $online = $user['Id_Usuario'];
  $on = "UPDATE Usuario SET Online = '1' WHERE Id_Usuario = '$online'";
  $line = $ConectionBd->query($on);
}
// validacion del tiempo para expirar una sesion dentro del sistema 
if(isset($_SESSION['time'])){
    // damos el tiempo en segundos para determinar en cuanto tiempo expirara la sesión
    $inactivo = 500; // 15 minutos 
    $tiempo = time() - $_SESSION['time'];
    // verificamos el tiempo inactivo de la sesion 
    if($tiempo > $inactivo){
        $on = "UPDATE Usuario SET Online = '0' WHERE Id_Usuario = '$online'";
        $line = $ConectionBd->query($on);
        // olvidar la sesion 
        session_unset();
        // destruir la sesion 
        session_destroy();
        // redirigir al login al caducar el tiempo de sesion 
        header("location:index.php");
    }
    }
    $_SESSION['time'] = time();
?>