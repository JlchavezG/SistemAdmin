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
  ;$idBuscar = $ResultadoB['Id_Usuario'];
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
  $IdPass = $ConectionBd->real_escape_string($_POST['IdPass']);
  $PassActual = $ConectionBd->real_escape_string(md5($_POST['PasswordAc']));
  $NewPass = $ConectionBd->real_escape_string($_POST['NewPassword']);
  $NewPassC = md5($NewPass);
  $CPassN = $ConectionBd->real_escape_string(md5($_POST['PasswordCon']));
  // consulta para extraer el password actual 
  $PassVerif = "SELECT * FROM Usuario WHERE  Password = '$PassActual' and Id_Usuario = '$IdPass'";
    if ($PassResultado = $ConectionBd->query($PassVerif)) {
      while ($rowPass = $PassResultado->fetch_array()) {
        $NPassok = $rowPass['Password'];
      }
    }
    if(isset($PassActual)) {
    if ($PassActual  == $NPassok) {
          if($NewPassC == $CPassN){
            // realizar la actualización de password al usuario 
            $ActualizaPassword = "UPDATE Usuario SET Password = '$NewPassC' WHERE Id_Usuario = '$IdPass'";
            $Actualizado = $ConectionBd->query($ActualizaPassword);
              if($Actualizado > 0){
                $AlertPass.="<div class='alert alert-success alert-dismissible fade show' role='alert'>
                              <strong>Excelente! </strong> El password se modifico de manera exitosa dentro de la plataforma los cambios se daran al cerrar la sesión el nuevo password es: $NewPass.
                              <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";   
              }
          else{
                $AlertPass.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                <strong>Error! </strong> El password no se modifico de manera exitosa dentro de la plataforma.
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
              }

          }
          else{
            $AlertPass.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong>Error! </strong> La confirmación de los password no coinciden por favor verifica tus credenciales.
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
          }

        }
          else {
            $AlertPass.="<div class='alert alert-danger alert-dismissible fade show shadow' role='alert'>
                            <svg class='bi text-danger' width='20' height='20' role='img' aria-label='Tools'>
                              <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                            </svg>
                            <strong> Password Actual invalido</strong> Por favor verifica tus credenciales o contacta a soporte.
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
          }
        }
          else {
            $AlertPass.="No hay datos que buscar";
    }
  }
  
// consulta busqueda usuarios 
   if(isset($_POST['buscar'])){
   $On = 1; 
   $Datos = $ConectionBd->real_escape_string($_POST['C_buscar']); 
   $Busqueda = "SELECT * FROM Usuario WHERE Nombre LIKE '%$Datos%' OR ApellidoP LIKE '%$Datos%' OR 
   ApellidoM LIKE '%$Datos%' OR Email LIKE '%$Datos%' OR UserName LIKE '%$Datos%'";
   $BusquedaE = $ConectionBd->query($Busqueda);
   if($BusquedaE ->num_rows > 0){
      $datosM.="<div class='table-responsive container mt-2 mb-3'>
                <div class='col-sm-12 col-md-12 col-lg-12'> 
                  <table class='table'>
                    <thead class='bg-light'>
                      <tr>
                        <th class='bg-light' scope='col'>Imagen</th>
                        <th class='bg-light' scope='col'>Nombre</th>
                        <th scope='col'>ApellidoPaterno</th>
                        <th scope='col'>ApellidoMaterno</th>
                        <th scope='col'>Telefono</th>
                        <th scope='col'>Email</th>
                        <th scope='col'>UserName</th>
                        <th scope='col'>FechadeRegistro</th>
                        <th scope='col'>Online</th>
                        <th scope='col'>Opcione</th>
                      </tr>
                    </thead>
                    <tbody>";
      while($LineaDatos = $BusquedaE->fetch_assoc()){
        $datosM.="<tr>
                    <td class='bg-light text-center' scope='row'><img src='img/Users/".$LineaDatos['ImgUser']."'style='width: 30px; height: 30px;' class='rounded-circle'></td>
                    <td class='bg-light' scope='row'>".$LineaDatos['Nombre']."</td>
                    <td class='bg-light' scope='row'>".$LineaDatos['ApellidoP']."</td>
                    <td class='bg-light' scope='row'>".$LineaDatos['ApellidoM']."</td>
                    <td class='bg-light' scope='row'>".$LineaDatos['Telefono']."</td>
                    <td class='bg-light' scope='row'>".$LineaDatos['Email']."</td>
                    <td class='bg-light' scope='row'>".$LineaDatos['UserName']."</td>
                    <td class='bg-light' scope='row'>".$LineaDatos['FechaReg']."</td>";
                    if($LineaDatos['Online'] == $On){
                      $IconOn = "<svg class='bi text-success' width='15' height='15' fill='currentColor'>
                                    <use xlink:href='library/icons/bootstrap-icons.svg#circle-fill'/> 
                                </svg>";
                    }
                    else{
                      $IconOn = "<svg class='bi text-danger' width='15' height='15' fill='currentColor'>
                                    <use xlink:href='library/icons/bootstrap-icons.svg#circle'/> 
                                </svg>";
                    }
        $datosM.="<td class='bg-light text-center' scope='row'>".$IconOn."</td>
                  <td class='bg-light' scope='row'>
                      <a href='EditarUser?Id_Usuario=".$LineaDatos['Id_Usuario']."' class='text-success text-decoration-none'>
                          <svg class='bi' width='15' height='15' fill='currentColor'>
                            <use xlink:href='library/icons/bootstrap-icons.svg#pencil-fill'/> 
                          </svg>
                      </a> - 
                      <a href='includes/Busqueda_EliminarUser.php?Id_Usuario=".$LineaDatos['Id_Usuario']."' class='text-success text-decoration-none'>
                          <svg class='bi' width='15' height='15' fill='currentColor'>
                              <use xlink:href='library/icons/bootstrap-icons.svg#trash-fill'/> 
                          </svg>
                      </a>
                  </td>
                  </tr>";
                
      }              
   }
   else{
      $datosM.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>No se Encontraron Coinsidencias en la busqueda</strong> Puedes buscar por Nombre, Apellidos, Email y Nombre de Usuario.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
   }
  }
// consulta buscar materiales 
if(isset($_POST['btnMaterial'])){
  $Consumible = 1;
  $Activo = 2; 
  $DatosBM = $ConectionBd->real_escape_string($_POST['buscarMaterial']); 
  $BusquedaM = "SELECT * FROM Materiales WHERE NomMaterial LIKE '%$DatosBM%'";
  $BusquedaME = $ConectionBd->query($BusquedaM);
  if($BusquedaME ->num_rows > 0){
      $datosMA.="<div class='table-responsive container mt-2 mb-3'>
                    <div class='col-sm-12 col-md-12 col-lg-12'> 
                        <table class='table'>
                          <thead class='bg-light'>
                              <tr>
                                <th class='bg-light' scope='col'>Imagen</th>
                                <th class='bg-light' scope='col'>Nombre de Material</th>
                                <th scope='col'>Descripcion</th>
                                <th scope='col'>Categoria</th>
                                <th scope='col'>Existencia</th>
                                <th scope='col'>Stock</th>
                                <th scope='col'>Opciones</th>
                              </tr>
                          </thead>
                          <tbody>";
                          while($LineaDatos = $BusquedaME->fetch_assoc()){
                            $datosMA.="<tr>
                                          <td class='bg-light text-center' scope='row'><img src='img/materiales/".$LineaDatos['ImgMaterial']."'style='width: 30px; height: 30px;' class='rounded-circle'></td>
                                          <td class='bg-light' scope='row'>".$LineaDatos['NomMaterial']."</td>
                                          <td class='bg-light' scope='row'>".$LineaDatos['DescripMaterial']."</td>";
                                          if($LineaDatos['Id_CatMaterial'] == $Consumible){
                                              $IconOn = "<svg class='bi text-success' width='15' height='15' fill='currentColor'>
                                                            <use xlink:href='library/icons/bootstrap-icons.svg#circle-fill'/> 
                                                          </svg>";
                                            }
                                            else{
                                            $IconOn = "<svg class='bi text-warning' width='15' height='15' fill='currentColor'>
                                                          <use xlink:href='library/icons/bootstrap-icons.svg#circle'/> 
                                                      </svg>";
                                            }
                            $datosMA.="<td class='bg-light text-center' scope='row'>".$IconOn."</td>
                                          
                                          <td class='bg-light' scope='row'>".$LineaDatos['Cantidad']."</td>
                                          <td class='bg-light' scope='row'>".$LineaDatos['Stok']."</td>
                                          <td class='bg-light' scope='row'>
                                              <a href='EditarMateriales?Id_Material=".$LineaDatos['Id_Material']."' class='text-success text-decoration-none'>
                                                  <svg class='bi' width='15' height='15' fill='currentColor'>
                                                      <use xlink:href='library/icons/bootstrap-icons.svg#pencil-fill'/> 
                                                  </svg>
                                              </a> - 
                                              <a href='includes/EliminarMaterial.php?Id_Material=".$LineaDatos['Id_Material']."' class='text-success text-decoration-none'>
                                                  <svg class='bi' width='15' height='15' fill='currentColor'>
                                                      <use xlink:href='library/icons/bootstrap-icons.svg#trash-fill'/> 
                                                  </svg>
                                              </a>
                                          </td>
                                    </tr>";              
      }              
  }
  else{
      $datosMA.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>No se Encontraron Coinsidencias en la busqueda</strong> Puedes buscar por Nombre de material ó descripcion de material.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
  }
} 
// registro nuevo usuario superUsuarios
if(isset($_POST['btnRegistrar'])){
$NewNombreR = $ConectionBd->real_escape_string($_POST['Nombre']);
$NewApellidoPR = $ConectionBd->real_escape_string($_POST['ApellidoP']);
$NewApellidoMR = $ConectionBd->real_escape_string($_POST['ApellidoM']);
$NewTelefonoR = $ConectionBd->real_escape_string($_POST['Telefono']);
$NewEmailR = $ConectionBd->real_escape_string($_POST['Email']);
$NewPlantelR = $ConectionBd->real_escape_string($_POST['Plantel']);
$NewTusuarioR = $ConectionBd->real_escape_string($_POST['Tusuario']);
$NewUserNameR = $ConectionBd->real_escape_string($_POST['UserName']);
$NewFechaR = date('Y-m-d');
$NewPasswordR = $ConectionBd->real_escape_string(MD5($_POST['Password']));
$NewOnlineR = 0;
$NewEstatusR = 1;
$NewImagenR = "imgUser1.png";
// consulta para verificar si el email ya esta registrado en la plataforma
$Remail = "SELECT Email FROM Usuario WHERE Email = '$NewEmailR'";
$RemailE = $ConectionBd->query($Remail);
// consulta para verificar si el userName ya esta registrado en la plataforma
$Usern = "SELECT UserName FROM Usuario WHERE UserName = '$NewUserNameR'";
$UsernE = $ConectionBd->query($Usern);
if($RemailE->num_rows > 0){
  $AccionUser.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                  <strong>Error al registrar al Nuevo Usuario</strong> El Email ya se encuentra registrado en la plataforma verifica por favor.
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
}
else if($UsernE->num_rows > 0){
  $AccionUser.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                  <strong>Error al registrar al Nuevo Usuario</strong> El Nombre del Usuario ya se encuentra registrado en la plataforma verifica por favor.
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
}
else {
  // consulta para registar nuevos usuarios 
  $NewUserData = "INSERT INTO Usuario(Nombre,ApellidoP,ApellidoM,Telefono,Email,Id_Plantel,Id_TUsuario,UserName,FechaReg,Password,Online,
  EstatusUser,ImgUser)VALUES('$NewNombreR','$NewApellidoPR','$NewApellidoMR','$NewTelefonoR','$NewEmailR','$NewPlantelR','$NewTusuarioR','$NewUserNameR','$NewFechaR','$NewPasswordR','$NewOnlineR','$NewEstatusR','$NewImagenR')";
  $NewUserDataE = $ConectionBd->query($NewUserData);
  if($NewUserDataE->num_rows > 0){
    $AccionUser.="<div class='alert alert-success alert-dismissible fade show' role='alert'>
                      <strong>Excelente el Nuevo Usuario se registro con exito</strong> ElUsuario ya se encuentra registrado en la plataforma verifica por favor.
                      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>";
  }

}
}
// ingresar nuevo material en sistemas 
if(isset($_POST['btnRegistrarMat'])){
$NomMaterial = $ConectionBd->real_escape_string($_POST['NombreMaterial']);
$DescMat = $ConectionBd->real_escape_string($_POST['DescripcionM']);
$CatMaterial = $ConectionBd->real_escape_string($_POST['categoriam']);
$Cantidad = $ConectionBd->real_escape_string($_POST['Cantidad']);
$StockMat = $ConectionBd->real_escape_string($_POST['Stok']);
$imgFile = $_FILES['imagen']['name'];
  $tmp_dir = $_FILES['imagen']['tmp_name'];
  $imgSize = $_FILES['imagen']['size'];
  if(empty($imgFile)){
    $MensajeMat.="<div class='alert alert-danger alert-dismissible fade show shadow' role='alert'>
                    <svg class='bi text-danger' width='20' height='20' role='img' aria-label='Tools'>
                      <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                    </svg>
                    <strong> Error</strong> Por favor selecciona un archivo en formato de imagen.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
  } 
  else{
  $upload_dir = './img/materiales/'; // Directorio en donde se subira el achivo
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
        $MensajeMat.="<div class='alert alert-danger alert-dismissible fade show shadow' role='alert'>
                      <svg class='bi text-danger' width='20' height='20' role='img' aria-label='Tools'>
                          <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                      </svg>
                      <strong> Error</strong> El archivo de la imagen es muy grande por favor selecciona uno no mayo a 1mb.
                      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>";
  }
    }
    else{
        $MensajeMat.="<div class='alert alert-danger alert-dismissible fade show shadow' role='alert'>
                      <svg class='bi text-danger' width='20' height='20' role='img' aria-label='Tools'>
                        <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                      </svg>
                      <strong> Error</strong> Solo se permiten archivos JPG, JPEG, PNG son permitidos.
                      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>";   
    }
  }
  if(!isset($Mensaje)){
      $InsertMat = "INSERT INTO Materiales(NomMaterial, DescripMaterial, Id_CatMaterial, Cantidad, Stok, ImgMaterial)
      VALUES('$NomMaterial','$DescMat','$CatMaterial','$Cantidad','$StockMat'.'$imgFile')";
      $imgInsert = $ConectionBd->query($InsertMat);
      
      if($imgInsert > 0){
        $MensajeMat.="<div class='alert alert-success alert-dismissible fade show' role='alert'>
                      <strong>Excelente! </strong>Se registro el material de manera exitosa dentro de la plataforma en breve se refrescara la pagina.
                      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>";     
       header("refresh:3;Materiales"); // redirects image view page after 5 seconds.
      }
    else
    {
      $MensajeMat.= "Error al insertar ...";
    }
  }





}




// realizar consulta para generar reporte de usuarios registrados entre las fechas solicitadas
if(isset($_POST['btnBuscarF'])){
$Fecha1 = $ConectionBd->real_escape_string($_POST['Fecha1']);
$Fecha2 = $ConectionBd->real_escape_string($_POST['Fecha2']);
$FechaRep = "SELECT * FROM Usuario WHERE (FechaReg) BETWEEN '$Fecha1' AND '$Fecha2'";
$FechaRepE = $ConectionBd->query($FechaRep);

}
// recuperar usaurios para la consulta de actualizar usuarios en sistemas
$IdMUser = $_GET['Id_Usuario'];
// consulta para extraer los datos del usuario a editar 
$MUsuarios = "SELECT U.Id_Usuario, U.Nombre, U.ApellidoP, U.ApellidoM, U.Telefono, U.Email,
U.Id_Plantel, U.Id_TUsuario, U.UserName, U.FechaReg ,U.Password, U.Online, U.EstatusUser,
U.ImgUser, P.Id_Plantel, P.NombrePlantel, P.DireccionPlantel, P.EmailPlantel, 
TU.Id_TUsuario, TU.NTUsuario, ES.Id_EstatusUser, ES.DEstatusUser FROM Usuario U INNER JOIN
Plantel P ON U.Id_Plantel =P.Id_Plantel INNER JOIN TUsuario TU ON U.Id_TUsuario = TU.Id_TUsuario 
INNER JOIN EstatusUser ES ON U.EstatusUser = ES.Id_EstatusUser WHERE Id_Usuario = '$IdMUser'";
$EMUsuarios = $ConectionBd->query($MUsuarios); 
$MUsuariosE = $EMUsuarios->fetch_assoc();
// consulta para extraer los datos de los materiales a editar
$Id_MaterialesS = $_GET['Id_Material'];
$RecMateriales = "SELECT M.Id_Material, M.NomMaterial, M.DescripMaterial, M.Id_CatMaterial, M.Cantidad, M.Stok, M.ImgMaterial, 
C.Id_Categoria, C.NombreCate FROM Materiales M INNER JOIN CategoriaMaterial C ON M.Id_CatMaterial = C.Id_Categoria WHERE Id_Material = '$Id_MaterialesS'";
$EjRecMateriales = $ConectionBd->query($RecMateriales);
$EMaterialesEx = $EjRecMateriales->fetch_assoc();
// actualizar material en sistemas 
if(isset($_POST['btnActualizarMat'])){
  $IdMat = $ConectionBd->real_escape_string($_POST['idMatAct']);
  $NomMaaterial = $ConectionBd->real_escape_string($_POST['NombreMat']);
  $DescripMater = $ConectionBd->real_escape_string($_POST['DescripMaterial']);
  $CategoriamAT = $ConectionBd->real_escape_string($_POST['categoria']);
  $Existencia = $ConectionBd->real_escape_string($_POST['Cantidad']);
  $StokMat = $ConectionBd->real_escape_string($_POST['Stock']);
  // consulta para actualizar en la tabla 
  $ActMaterialS = "UPDATE Materiales SET NomMaterial = '$NomMaaterial', DescripMaterial = '$DescripMater', Id_CatMaterial = '$CategoriamAT',
  Cantidad = '$Existencia', Stok = '$StokMat' WHERE Id_Material = '$IdMat'";
  $UpdateMat = $ConectionBd->query($ActMaterialS);
  if($UpdateMat > 0){
    $AlertActMaterial.= "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                          <strong>Genial el Material se actualizo en el sistema </strong> Espera 3 segundos la pagina se refrescara.
                          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                    header("Refresh:5; url=OptionMateriales");
  }
  else{
    $AlertActMaterial.= "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong>Error el Material no se actualizo en el sistema </strong> Espera 3 segundos la pagina se refrescara.
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                        header("Refresh:3; url=OptionMateriales");
  }
}
// actualizar usuario apartado sistemas
if(isset($_POST['btnActualizarUser'])){
$IdActUser = $ConectionBd->real_escape_string($_POST['idUserAct']); 
$ActNombre = $ConectionBd->real_escape_string($_POST['ENombre']);
$ActApellidoP = $ConectionBd->real_escape_string($_POST['EApellidoP']);
$ActApellidoM = $ConectionBd->real_escape_string($_POST['EApellidoM']);
$ActTelefono = $ConectionBd->real_escape_string($_POST['ETelefono']);
$ActEmail = $ConectionBd->real_escape_string($_POST['EEmail']);
$ActIdPlantel = $ConectionBd->real_escape_string($_POST['EPlantel']);
$ActIdTuser = $ConectionBd->real_escape_string($_POST['EId_TUsuario']);
$ActStatus = $ConectionBd->real_escape_string($_POST['EEstatusUser']);
// consulta para actualizar el usuario de sistemas
$ActUserS = "UPDATE Usuario SET Nombre = '$ActNombre', ApellidoP = '$ActApellidoP', ApellidoM = '$ActApellidoM',
Telefono = '$ActTelefono', Email = '$ActEmail', Id_Plantel = '$ActIdPlantel', Id_TUsuario = '$ActIdTuser', EstatusUser = '$ActStatus' 
WHERE Id_Usuario = '$IdActUser'";
$eJ = $ConectionBd->query($ActUserS);
if($eJ > 0){
  $AlertActUser.= "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Genial el usuario se actualizo en el sistema </strong> Espera 5 segundos la pagina se refrescara.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                    header("Refresh:5; url=OptionUser");
}
else{
  $AlertActUser.= "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Error al actualizar el usuario en el sistema </strong> Espera 10 segundos la pagina se refrescara.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                    header("Refresh:5; url=OptionUser");
}

}
// generar las alertas para verificar el stok de los materiales 


?>