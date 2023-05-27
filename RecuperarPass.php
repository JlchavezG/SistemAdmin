<?php
error_reporting(0);
require "includes/ConectBd.php";

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
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.7.0.min.js"></script>
    <title>Inicio de Sistema | Recuperar Password</title>
</head>

<body>
    <!-- inicia pagina -->
    <div class="container py-4">
        <div class="row text-center mt-3">
            <h1 class="display-6"> Recuperar password de | <span class="text-success">Usuario</span> </h1>
        </div>
        <div class="row text-center mt-4 justify-content-center">
            <div class="row mt-3">
                <div class="col container">
                    <img src="img/logo_iscjlchavezg.png" alt="logo" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center px-2 py-2">
            <div class="col-sm-10 col-md-10 col-lg-5">
                <form action="" method="post">
                    <div class="row">
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-success" id="basic-addon1">
                                <svg class="bi text-white" width="15" height="15" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#person-fill-check" />
                                </svg>
                            </span>
                            <input type="text" class="form-control border-success" placeholder="Usuario" aria-label="Usuario" aria-describedby="basic-addon1" require />
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-success" id="basic-addon1">
                                <svg class="bi text-white" width="15" height="15" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#person-fill-check" />
                                </svg>
                            </span>
                            <input type="email" class="form-control border-success" placeholder="Email" aria-label="Usuario" aria-describedby="basic-addon1" require />
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-grid gap-2 mt-2">
                            <input type="submit" name="BtnRecPass" value="Recuperar" class="btn btn-sm btn-outline-success rounded-pill">
                        </div>
                    </div>
                    <div class="row mt-4 align-items-end">
                        <div class="form-check form-switch ">
                            <input type="checkbox" id="darkSwitch" class="form-check-input">
                            <label for="darkSwitch" class="form-check-label">
                                <svg class="bi" width="22" height="22" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#brightness-low" />
                                </svg>
                            </label> |
                            <svg class="bi" width="15" height="15" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#moon-stars" />
                            </svg>
                        </div>
                    </div>
                </form>
                <div class="row mt-3">
                    <div class="col-ms-10 col-md-10 col-lg-10 bg-light rounded-pill text-center py-2" style="width:550px;">
                        <svg class="bi" width="25" height="25" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#reply-fill" />
                        </svg> Regresar |</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- termina pagina -->
    <?php include "process/ModalSoporte.php"; ?>
    <script src="js/dark-mode.js"></script>
    <script src="js/pace.js"></script>
</body>

</html>