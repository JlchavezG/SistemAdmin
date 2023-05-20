<?php 
error_reporting(0);
session_start();
include "includes/ConectBd.php";
if(isset($_POST['BtnLogin'])){
$Accion1 = "Ingreso a la Plataforma";
$Accion2 = "Salida de la Plataforma";
$UserForm = $ConectionBd->real_escape_string($_POST['email']);
$PassworForm = $ConectionBd->real_escape_string(md5($_POST['password']));
$CLogin = "SELECT * FROM Usuario WHERE Email = '$UserForm' and Password = '$PassworForm' and EstatusUser = '1'";
if($ResultadoLogin = $ConectionBd->query($CLogin)){
  while($rowLogin = $ResultadoLogin->fetch_array()){
    $EmailOk = $rowLogin['Email'];
    $PasswordOk = $rowLogin['Password'];
  }
  $ResultadoLogin->close();
}
if(isset($UserForm) && isset($PassworForm)){
    if($UserForm == $EmailOk && $PassworForm == $PasswordOk){
        $_SESSION['login'] = TRUE;
        $_SESSION['Usuario'];
        header("location:AppProgres.php");
    } else {
        $alerta.="<div class='alert alert-danger alert-dismissible fade show shadow' role='alert'>
                   <svg class='bi text-danger' width='20' height='20' role='img' aria-label='Tools'>
                     <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                   </svg>
                   <strong> Usuario y/o Password no valido</strong> Por favor verifica tus credenciales o contacta a soporte técnico.
                   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                 </div>";
    }
} else{
 header("location:index.php");
}

}

?>