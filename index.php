<?php
include "includes/ConectBd.php";
include "includes/ProLogin.php";

?>
<!DOCTYPE html>
<html>

<head>
    <title>Inicio de Sistema | IscjlchavezG</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/dark.css">
    <link rel="stylesheet" type="text/css" href="css/pace.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="row justify-content-center mt-5">
        <div class="col-md-10 col-lg-6 px-2 mt-3">
            <h3 class="mb-4 text-center mt-3">Inicio de sesión</h3>
            <div class="row mt-1 text-center">
                <div class="col container ">
                    <img src="img/logo_iscjlchavezg.png" alt="logoIscjlchavez" class="img-fluid" id="img1">
                </div>

            </div>
            <div class="row py-1">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                    <div class="form-check form-switch">
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
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="off" name="FormLogin" class="px-3">
                <div class="input-group mb-3 mt-1">
                    <span class="input-group-text bg-success" id="User">
                        <svg class="bi text-white" width="15" height="15" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#person-fill-check" />
                        </svg>
                    </span>
                    <input type="text" name="usuario" class="form-control border-success" placeholder="Nombre de Usuario" aria-label="Usuario" autocomplete="off" required />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-success" id="Pas">
                        <svg class="bi text-white" width="15" height="15" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#lock-fill" />
                        </svg>
                    </span>
                    <input type="password" name="password" class="form-control border-success" placeholder="Password" id="VerPassWord" aria-label="Password" required />
                </div>
                <div class="row py-1 px-1">
                    <div class="col">
                        <div class="form-check form-switch">
                            <input type="checkbox" id="VerPass" class="form-check-input" onclick="verPass(this);">
                            <label for="VerPass" class="form-check-label">
                                Visualizar Password
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#key-fill" />
                        </svg>&nbsp;&nbsp;¿Perdiste tu Password?
                    </div>
                </div>
                <div class="d-grid gap-2 mt-2">
                    <input type="submit" name="BtnLogin" value="Ingresar" class="btn btn-sm btn-outline-success rounded-pill">
                </div>
            </form>
            <div class="row py-1 px-2 mt-3">
                <div class="col container">
                    <?php echo $alerta; ?>
                </div>
            </div>
            <div class="row py-1 mt-1 justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="border-0 ">
                        <div class="row mt-1 py-1 text-center">
                            <div class="col">
                                <a href="https://github.com/JlchavezG" target="_blank" class="text-secondary text-decoration-none">
                                <svg class="bi" width="25" height="25" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#github" />
                                </svg>
                            </a>
                            </div>
                            <div class="col">
                             <a href="https://www.facebook.com/iscjoseluischavezg" target="_blank" class="text-secondary text-decoration-none">
                                <svg class="bi" width="25" height="25" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#facebook" />
                                </svg>
                              </a>
                            </div>
                            <div class="col">
                              <a href="https://www.instagram.com/iscjlchavezg/" target="_blank" class="text-secondary text-decoration-none">
                                <svg class="bi" width="25" height="25" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#instagram" />
                                </svg>
                              </a>
                            </div>
                            <div class="col">
                              <a href="https://twitter.com/daerblack" target="_blank" class="text-secondary text-decoration-none">  
                                <svg class="bi" width="25" height="25" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#twitter" />
                                </svg>
                              </a>  
                            </div>
                            <div class="col">
                             <a href="#" data-bs-toggle="modal" data-bs-target="#ModalSoporte" class="text-decoration-none text-secondary">   
                               <svg class="bi" width="25" height="25" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#headset" />
                                </svg>
                             </a>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-6 text-center mt-4"><span class="text-success text-wrap fs-6">SistemAdmin | iscjoseluischavezg.mx Developer@2023 </span></div>
            </div>
            <?php include "process/ModalSoporte.php"; ?>
            
            <script>
                function verPass(ck) {
                    if (ck.checked)
                        $('#VerPassWord').attr("type", "text");
                    else
                        $('#VerPassWord').attr("type", "password");
                }
            </script>
            <script src="js/dark-mode.js"></script>
            <script src="js/pace.js"></script>
</body>

</html>