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
// generar la consulta para extraer los datos del usuario que ingresa a la plataforma 
$UserIngresa = "SELECT U.Id_Usuario, U.Nombre, U.ApellidoP, U.ApellidoM, U.Telefono, U.Email,
U.Id_Plantel, U.Id_TUsuario, U.UserName, U.Password, U.Online, U.EstatusUser,
U.ImgUser, P.Id_Plantel, P.NombrePlantel, P.DireccionPlantel, P.EmailPlantel, 
TU.Id_TUsuario, TU.NTUsuario, ES.Id_EstatusUser, ES.DEstatusUser FROM Usuario U INNER JOIN
 Plantel P ON U.Id_Plantel =P.Id_Plantel INNER JOIN TUsuario TU ON U.Id_TUsuario = TU.Id_TUsuario 
 INNER JOIN EstatusUser ES ON U.EstatusUser = ES.Id_EstatusUser WHERE UserName = '$usuario'"; 
 $verificar = $ConectionBd->query($UserIngresa);
 $Perfil = $verificar->fetch_array();
 // genera el Qr del usuario que ingresa a la plataforma 
 $dir = 'img/qr/';
 if(!file_exists($dir))
   mkdir($dir);
 /*{
  $FileName = $dir.'Usuario'.$Perfil['Id_Usuario'].'png';
  $tam = 4;
  $lavel = 'H';
  $frameSize = '3';
  $QrNombre = $Perfil['Nombre'];
  $QrApellidoP = $Perfil['ApellidoP'];
  $QrApellidoM = $Perfil['ApellidoM'];
  $QrTelefono = $Perfil['Telefono'];
  $QrEmail = $Perfil['Email'];
  $QrTUser = $Perfil['NTUsuario'];
  $QrContenido = 'BEGIN:VCARD'."\n"
  .'VERSION:2.1'."\n"
  .'FN:'.$QrNombre. $QrApellidoP. $QrApellidoM."\n"
  .'TEL;WORK;VOICE:'.$QrTelefono."\n"
  .'TITLE:'.$QrTUser."\n"
  .'EMAIL:'.$QrEmail."\n"
  ."END:VCARD";
  QRcode::png($QrContenido,$FileName,$lavel,$tam,$frameSize);
 }*/


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
    // variables para el menu, dasboard y tipo de usuario
    $Msistemas = 1;
    $MAdmin = 2;
    $MUsuario = 3;
    $Tmenu = $user['Id_TUsuario'];

?>