<?php 
error_reporting(0);
require "includes/ConectBd.php";
require "includes/configuracion.php";
include "includes/consultas.php";
include "includes/Acciones.php";

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/dark.css">
    <link rel="stylesheet" type="text/css" href="css/pace.css">
    <link rel="stylesheet" type="text/css" href="css/Config.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.7.0.min.js"></script>
    <title>Editar Usuario | Dashboard SistemAdmin</title>
</head>
<!-- navbar-->
<body>
<?php include "process/navbar.php"; ?>
<!-- termina navbar -->
<!-- inicia menu -->
<?php 
 if($Tmenu == $Msistemas){include "process/MenuSistem.php";}
 else if($Tmenu == $MAdmin){include "process/MenuAdmin.php";}
 else if($Tmenu == $MUDocente){include "process/MenuUsuarios.php";}
 else if($Tmenu == $MAlumno){include "process/MenuAlumnos.php";}?>
<!-- terminar el menu -->
<div class="container mt-2">
    <div class="row mt-4">
        <h3 class="text-center display-6 fs-5">Modulo Editar Usuario <span class="text-success"> Sistemas</span></h3>
    </div>
    <hr>
    <div class="row mt-4">
       <span class="text-success">
        <a href="OptionUser" class="text-decoration-none">
          <svg class="bi text-success" width="22" height="22" fill="currentColor">
            <use xlink:href="library/icons/bootstrap-icons.svg#arrow-left-circle" />
          </svg>
        </a>  Regresar a Opciones de Usuario
       </span>
    </div>
    <div class="row mt-2">
        <?php echo $AlertActUser; ?>
        <?php if($eJ > 0){$Clase = true;}
         ?>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="needs-validation <?php echo $Clase ? 'd-none': '' ?>" novalidate>
    <div class="row mt-2 d-flex justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="row d-flex justify-content-center">
                <img src="img/Users/<?php echo $MUsuariosE['ImgUser']?>" alt="Imagen de perfil" class="img-fluid" style="width: 200px; height: 180px; border-radius:50%;">
            </div>
            <div class="row mt-2 d-flex justify-content-center">
                <div class="col-sm-6 col-md-6-col-lg-6">
                <input type="hidden" name="idUserAct" value="<?php echo $MUsuariosE['Id_Usuario']; ?>">
                <input type="text" name="ENombre" id="ENombre" placeholder="Ingresa tu nombre" class="form-control" value="<?php echo $MUsuariosE['Nombre']; ?>" required>
                </div>
            </div>
            <div class="row mt-2 d-flex justify-content-center">
                <div class="col-sm-3 col-md-3 col-lg-3 mt-2">
                <input type="text" name="EApellidoP" id="EApellidoP" placeholder="Apellido Paterno" class="form-control" value="<?php echo $MUsuariosE['ApellidoP']; ?>" required>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3 mt-2">
                <input type="text" name="EApellidoM" id="EApellidoM" placeholder="Apellido Materno" class="form-control" value="<?php echo $MUsuariosE['ApellidoM']; ?>" required>
                </div>
            </div>
            <div class="row mt-2 d-flex justify-content-center">
                <div class="col-sm-3 col-md-3 col-lg-3">
                <input type="tel" name="ETelefono" id="ETelefono" placeholder="Telefono" class="form-control" value="<?php echo $MUsuariosE['Telefono']; ?>" required>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                <input type="email" name="EEmail" id="EEmail" placeholder="Email" class="form-control" value="<?php echo $MUsuariosE['Email']; ?>" required>
                </div>
            </div>
            <div class="row mt-2 d-flex justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <select name="EPlantel" id="EPlantel" class="form-select" required>
                        <option value="<?php echo $MUsuariosE['Id_Plantel']; ?>"><?php echo $MUsuariosE['NombrePlantel']; ?></option>
                        <?php while ($LineaPlantel = $EPlanteles->fetch_assoc()) { ?>
                              <option value="<?php echo $LineaPlantel['Id_Plantel']; ?>"><?php echo $LineaPlantel['NombrePlantel'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="row mt-2 d-flex justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <select name="EId_TUsuario" id="EId_TUsuario" class="form-select" required>
                        <option value="<?php echo $MUsuariosE['Id_TUsuario']; ?>"><?php echo $MUsuariosE['NTUsuario']; ?></option>
                        <?php while($LineaTipo = $ECTUsuario->fetch_assoc()) { ?>
                              <option value="<?php echo $LineaTipo['Id_TUsuario']; ?>"><?php echo $LineaTipo['NTUsuario']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="row mt-2 d-flex justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <select name="EEstatusUser" id="EEstatusUser" class="form-select" required>
                        <option value="<?php echo $MUsuariosE['EstatusUser']; ?>"><?php echo $MUsuariosE['DEstatusUser']; ?></option>
                        <?php while($LineaEstatus = $EstatusUserE->fetch_assoc()){ ?>
                              <option value="<?php echo $LineaEstatus['Id_EstatusUser']; ?>"><?php echo $LineaEstatus['DEstatusUser']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="row mt-2 d-flex justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="d-grid gap-2">
                     <input type="submit" value="Actualizar" class="btn btn-sm btn-outline-success rounded-pill" name="btnActualizarUser">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
<?php include "process/ModalSoporte.php"; ?>
<?php include "process/footer.php"; ?>
<script src="js/dark-mode.js"></script>
<script src="js/pace.js"></script>
<script>
(function () {
  'use strict'
  var forms = document.querySelectorAll('.needs-validation')
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
</body>

</html>