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
    <script src="js/jquery-3.7.0.min.js"></script>
</head>

<body>
    <div class="row justify-content-center mt-5">
        <div class="col-md-10 col-lg-6 px-2 mt-3">
            <h3 class="mb-4 text-center mt-3">Inicio de sesión</h3>

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
                    <span class="input-group-text" id="User">
                        <svg class="bi" width="15" height="15" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#person-fill-check" />
                        </svg>
                    </span>
                    <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Usuario" autocomplete="off" required />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="Pas">
                        <svg class="bi" width="15" height="15" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#lock-fill" />
                        </svg>
                    </span>
                    <input type="password" name="password" class="form-control" placeholder="Password" id="VerPassWord" aria-label="Password" required />
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
                        <svg class="bi" width="15" height="15" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#key-fill" />
                        </svg>&nbsp;&nbsp;¿Perdiste tu Password?
                    </div>
                </div>
                <div class="d-grid gap-2 mt-2">
                    <input type="submit" name="BtnLogin" value="Ingresar" class="btn btn-sm btn-success rounded-pill">
                </div>
            </form>
            <div class="row py-1 px-2 mt-3">
                <div class="col container">
                    <?php echo $alerta; ?>
                </div>
            </div>


        </div>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/dark-mode.js"></script>
        <script>
            function verPass(ck){
             if(ck.checked)
               $('#VerPassWord').attr("type","text");
              else
              $('#VerPassWord').attr("type","password");
            }
        </script>
</body>

</html>