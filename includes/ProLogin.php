<?php
error_reporting(0);
session_start();
include 'ConectBd,php';
if (isset($_POST['BtnLogin'])) {
  $Accion = "Ingreso a la plataforma";
  $Accion1 = "Salida de la plataforma";
  $usuario = $ConectionBd->real_escape_string($_POST['usuario']);
  $password = $ConectionBd->real_escape_string(md5($_POST['password']));
  $q = "SELECT * FROM Usuario WHERE UserName = '$usuario' and Password = '$password' and EstatusUser = '1'";
  if ($resultado = $ConectionBd->query($q)) {
    while ($row = $resultado->fetch_array()) {
      $userok = $row['UserName'];
      $passwordok = $row['Password'];
    }
    $resultado->close();
  }
  $ConectionBd->close();
  if (isset($usuario) && isset($password)) {
    if ($usuario == $userok && $password == $passwordok) {
      $_SESSION['loguin'] = TRUE;
      $_SESSION['Usuario'] = $usuario;
      
      header("location:AppProgres");
    } else {
      $alerta .= "<div class='alert alert-danger alert-dismissible fade show shadow' role='alert'>
                           <svg class='bi text-danger' width='20' height='20' role='img' aria-label='Tools'>
                             <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                           </svg>
                           <strong> Usuario y/o password invalido</strong> Por favor verifica tus credenciales o contacta a soporte.
                           <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
    }
  } else {
    header("location:index");
  }
}