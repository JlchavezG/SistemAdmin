<div class="container">
    <div class="row mt-5">
        <div class="col-sm-6 col-md-6 col-lg-6 mt-2">
            <a href="UsuariosSistem.php" class="text-decoration-none">
                <svg class='bi text-success' width='25' height='25' fill='currentColor'>
                    <use xlink:href='library/icons/bootstrap-icons.svg#arrow-left-circle-fill' />
                </svg>
            </a>
            <span>Regresar a Usuarios</span>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 mt-1"></div>
    </div>
    <div class="row mt-1">
        <div class="container mt-3 py-2 d-flex justify-content-center">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="needs-validation" novalidate method="POST" />
                <div class="row mt-2">
                    <div class="input-group mb-1">
                        <input type="text" class="form-control" name="C_buscar" placeholder="Usuario a buscar" aria-label="Busqueda" aria-describedby="button-addon2" required>
                        <button class="btn btn-outline-success" type="submit" id="buscar" name="buscar">Buscar</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <div class="row mt-2 justify-content-center mb-2">
                <div class="container">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="py-3" id="datos">
                            <?php echo $datosM; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "process/modalModificarUsuario.php"; ?>
    <?php include "process/ModalSoporte.php"; ?>