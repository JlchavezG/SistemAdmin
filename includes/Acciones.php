<?php
error_reporting(0);
include 'ConectBd.php';
// accion de restablecer password
// validar el clic de btn restablecer 
if (isset($_POST['BtnRecPass'])) {
  // recuperar los datos de usuario y email 
  $RecuperaUser = $ConectionBd->real_escape_string($_POST['Ruser']);
  $RecuperaEmail = $ConectionBd->real_escape_string($_POST['Remail']);
  // generar la consulta para extrare los datos de usuario y email a buscar 
  $Buser = "SELECT * FROM Usuario WHERE Email = '$RecuperaEmail' and UserName = '$RecuperaUser'";
  $EBuser = $ConectionBd->query($Buser);
  $ResultadoB = $EBuser->fetch_array();
  $idBuscar = $ResultadoB['Id_Usuario'];
  $EmailBuscar = $ResultadoB['Email'];
  if ($ResultadoB > 0) {
    $AlertaB .= "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                   <strong>Datos Encontrados !</strong> Por favor ingresa y verifica el nuevo password .
                   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
               </div>
               <div class='container mt-1'>
               <div class='row justify-content-center py-2'>
                 <div class='col' id='mensaje'></div>
               </div>
                 <div class='row justify-content-center py-2'>
                   <div class='col-sm-12 col-md-12 col-lg-12'>
                       <form action='UpdatePass.php' method='get'>
                          <input type='hidden' name='idRpass' value='$idBuscar'>
                          <input type='hidden' name='EmaiR' value = '$EmailBuscar'>
                       <div class='row'>
                         <div class='col-sm-12 col-md-12 col-lg-12 mt-2'>
                            <input type='password' id='password' class='form-control needs-validation' novalidate name='npass' placeholder='Nuevo Password' required>
                         </div>
                        </div>
                       </div>
                       <div class='row mt-2'>
                         <input type='submit' name='guardar' value='Restablecer' class='btn btn-success btn-sm rounded-pill'>
                       </div>
                       </form>
                   </div>
                   <hr>
                   <div class='row text-center' py-2>
                      <p><a href='index.php' class='text-center text-decoration-none text-success'>Ya recorde mi password</a></p>
                   </div>
                 </div>
               </div>
               ";
  } else {
    $AlertaB .= "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                   <strong>Datos <b>No Encontrados !</b></strong> Por favor verifica el usuario y/o comunicate a soporte .
                   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
               </div>";
  }
}
