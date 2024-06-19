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
    <title>Editar Material | Dashboard SistemAdmin</title>
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
        <h3 class="text-center display-6 fs-5">Modulo Editar Material <span class="text-success"> Sistemas</span></h3>
    </div>
    <hr>
    <div class="row mt-4">
       <span class="text-success">
        <a href="OptionMateriales" class="text-decoration-none">
          <svg class="bi text-success" width="22" height="22" fill="currentColor">
            <use xlink:href="library/icons/bootstrap-icons.svg#arrow-left-circle" />
          </svg>
        </a>  Regresar a Opciones de Materiales
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
                <img src="img/materiales/<?php echo $EMaterialesEx['ImgMaterial']?>" alt="Imagen de perfil" class="img-fluid" style="width: 200px; height: 180px; border-radius:50%;">
            </div>
            <div class="row mt-2 d-flex justify-content-center">
                <div class="col-sm-6 col-md-6-col-lg-6">
                <input type="hidden" name="idMatAct" value="<?php echo $EMaterialesEx['Id_Material']; ?>">
                <input type="text" name="ENombreM" id="ENombreM" placeholder="Ingresa el nombre de material" class="form-control" value="<?php echo $EMaterialesEx['NomMaterial']; ?>" required>
                </div>
            </div>
            <div class="row mt-2 d-flex justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-6 mt-2 ">
                    <textarea name="DescripMaterial" id="DescripMaterial" class="form-control" placeholder="Descripcion Material" rows="2">
                        <?php echo $EMaterialesEx['DescripMaterial']; ?>
                    </textarea>
                </div>
            </div>
            <div class="row mt-2 d-flex justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <select class="form-select" aria-label="Default select example" name="categoria">
                        <option selected><?php echo $EMaterialesEx['NombreCate'];?></option>
                            <?php while($LineM = $ECatMaterial->fetch_assoc()) { ?>
                            <option value="<?php echo $LineM['Id_Material'];?>"><?php echo $LineM['NombreCate'];?></option>
                            <?php } ?>
                    </select>
                </div>
            </div>
            <div class="row mt-2 d-flex justify-content-center">
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <input type="number" name="Cantidad" value="<?php echo $EMaterialesEx['Cantidad'];?>" id="Cantidad" placeholder="Cantidad" min="1" max="100" class="form-control">
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <input type="number" name="Stock" value="<?php echo $EMaterialesEx['Stok'];?>" id="Stok" placeholder="Stok" min="1" max="100" class="form-control">
                </div>
            </div>
            <div class="row mt-2 d-flex justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="d-grid gap-2">
                     <input type="submit" value="Actualizar" class="btn btn-sm btn-outline-success rounded-pill" name="btnActualizarMat">
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