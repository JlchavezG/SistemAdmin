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
              </div>";
  } else {
    $AlertaB .= "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Datos <b>No Encontrados !</b></strong> Por favor verifica el usuario y/o comunicate a soporte .
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
  }
}
// editar datos de perfil
if(isset($_POST['btn_Mperfil'])){
  $IdPerfil = $ConectionBd->real_escape_string($_POST['idMPerfil']);
  $NombrePerfil = $ConectionBd->real_escape_string($_POST['NombrePerfil']);
  $ApellidoPerfil = $ConectionBd->real_escape_string($_POST['ApaternoPerfil']);
  $ApellidoMPerfil = $ConectionBd->real_escape_string($_POST['AmaternoPerfil']);
  $TelefonoPerfil = $ConectionBd->real_escape_string($_POST['TelefonoPerfil']);
  $EmailPerfil = $ConectionBd->real_escape_string($_POST['EmailPerfil']);
  if($NombrePerfil == ""){
    $AlertaPerfil .= "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Error <b>Campos requeridos !</b></strong> Por favor Ingresa el nombre del Usuario.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
  }
  elseif($ApellidoPerfil == ""){
    $AlertaPerfil .= "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Error <b>Campos requeridos !</b></strong> Por favor Ingresa el Apellido Paterno del Usuario.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
  } 
  elseif($ApellidoMPerfil == ""){
    $AlertaPerfil .= "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Error <b>Campos requeridos !</b></strong> Por favor Ingresa el Apellido Materno del Usuario.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
  } 
  elseif($TelefonoPerfil == ""){
    $AlertaPerfil .= "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Error <b>Campos requeridos !</b></strong> Por favor Ingresa el Telefono del Usuario.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
  } 
  elseif($EmailPerfil == ""){
    $AlertaPerfil .= "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Error <b>Campos requeridos !</b></strong> Por favor Ingresa el Email del Usuario.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
  } 
  else{
    // se realiza la consulta para actualizar los datos en la tabla usuario
    $MPerfil = "UPDATE Usuario SET Nombre = '$NombrePerfil', ApellidoP = '$ApellidoPerfil', ApellidoM = '$ApellidoMPerfil',
    Telefono = '$TelefonoPerfil', Email = '$EmailPerfil' WHERE Id_Usuario = '$IdPerfil'";
    $MperfilE = $ConectionBd->query($MPerfil);
    if($MperfilE > 0){
      $AlertaPerfil .= "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Excelente <b>Modificación exitosa !</b></strong> Los datos del perfil fueron Modificados.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                      header("Refresh:2");
    }
    else{
      $AlertaPerfil .= "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Error<b>Modificación No exitosa !</b></strong> Los datos del perfil No fueron Modificados contacta a soporte.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
    }

  }
}
// Subir la imegen de perfil 
if(isset($_POST['Btn_Subir'])){
  $IdImg = $ConectionBd->real_escape_string($_POST['IdImgPerfil']);
  $imgFile = $_FILES['imagen']['name'];
  $tmp_dir = $_FILES['imagen']['tmp_name'];
  $imgSize = $_FILES['imagen']['size'];
  if(empty($imgFile)){
    $Mensaje.="<div class='alert alert-danger alert-dismissible fade show shadow' role='alert'>
                    <svg class='bi text-danger' width='20' height='20' role='img' aria-label='Tools'>
                      <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                    </svg>
                    <strong> Error</strong> Por favor selecciona un archivo en formato de imagen.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
  } 
  else{
   $upload_dir = './img/Users/'; // Directorio en donde se subira el achivo
   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // extencion de la imagen
// validando imagen y extensiones
      $valid_extensions = array('jpeg', 'jpg', 'png'); // extenciones validas
// renombrando uploading imagen
      $userpic = rand(1000,1000000).".".$imgExt;
// permitir formatos de archivo de imagen válidos
    if(in_array($imgExt, $valid_extensions)){     
       // Comprobando el tamaño del archivo '1 MB'
      if($imgSize < 1000000)       {
        move_uploaded_file($tmp_dir,$upload_dir.$userpic);
      }
      else{
        $Mensaje.="<div class='alert alert-danger alert-dismissible fade show shadow' role='alert'>
                      <svg class='bi text-danger' width='20' height='20' role='img' aria-label='Tools'>
                          <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                      </svg>
                      <strong> Error</strong> El archivo de la imagen es muy grande por favor selecciona uno no mayo a 1mb.
                      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>";
  }
    }
    else{
        $Mensaje.="<div class='alert alert-danger alert-dismissible fade show shadow' role='alert'>
                      <svg class='bi text-danger' width='20' height='20' role='img' aria-label='Tools'>
                        <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                      </svg>
                      <strong> Error</strong> Solo se permiten archivos JPG, JPEG, PNG son permitidos.
                      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>";   
    }
  }
  if(!isset($Mensaje)){
      $ImgUpdate = "UPDATE Usuario SET ImgUser = '$userpic' WHERE Id_Usuario = '$IdImg'";
      $ImgUpdateOk = $ConectionBd->query($ImgUpdate);
      
      if($ImgUpdateOk > 0){
        $Mensaje.="<div class='alert alert-success alert-dismissible fade show' role='alert'>
                      <strong>Excelente! </strong> La Imagen de perfil se modifico de manera exitosa dentro de la plataforma en breve se refrescara la pagina.
                      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>";     
       header("refresh:3;PerfilUser.php"); // redirects image view page after 5 seconds.
      }
    else
    {
      $Mensaje.= "Error al insertar ...";
    }
  }
}
// acciones para modificar el password de usuario 
if(isset($_POST['MoPassword'])){
$IdPassUser = $ConectionBd->real_escape_string($_POST['IdPass']);
$PassActual = $ConectionBd->real_escape_string(md5($_POST['PasswordAc']));
$NewPass = $ConectionBd->real_escape_string($_POST['NewPasswor']);
$NewPassC = md5($NewPass);
$CpassN = $ConectionBd->real_escape_string(md5($_POST['PasswordCon']));
// consulta para verificar si es el password actual 
$PassVerif = "SELECT * FROM Usuario WHERE Password = '$PassActual' and Id_Usuario = '$IdPassUser'";
if($PassResultado = $ConectionBd->query($PassVerif)){
  while($rowPassword = $PassResultado->fetch_array()){
    $NPassOk = $rowPassword['Password'];
  }
}
if(isset($PassActual)){
  if($PassActual == $NPassOk){
    if($NewPassC == $CpassN){
      // realizar la actualizacion del paswword al usuario 
      $ActualizarPassword = "UPDATE Usuario SET Password = '$NewPassC' WHERE Id_Usuario = '$IdPassUser'";
      $Actualizando = $ConectionBd->query($ActualizarPassword);
      if($ActualizarPassword > 0){
        $AlertPass.= "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Excelente! </strong> El Password se modifico de manera exitosa dentro de la plataforma los cambios se daran al cerrar la Sesión.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
      }
      else{
        $AlertPass.= "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Error! </strong> El Password no se modifico de manera exitosa dentro de la plataforma intentalo más tarde.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
      }
    }
    else{
      $AlertPass.= "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Error! </strong> Verifica tu password la confirmación del mismo no coinside.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
    }
  }
  else{
      $AlertPass.= "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Password Actual no encontrado </strong> Por favor Verifica tu password o contacta a soporte.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
  }
}
else{
  $AlertPass.= "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>No Existen datos que Buscar </strong> Por favor Digita tu password Actual.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
}
}
?>