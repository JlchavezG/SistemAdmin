<div class="container">
    <div class="row mt-4">
    <h3 class="text-center display-6 fs-5">Buscar Usuarios <span class="text-success"> Sistemas</span></h3>
    </div>
    <div class="row mt-5">
        <div class="col-sm-6 col-md-6 col-lg-6 mt-2">
            <a href="UsuariosSistem" class="text-decoration-none">
                <svg class='bi text-success' width='25' height='25' fill='currentColor'>
                    <use xlink:href='library/icons/bootstrap-icons.svg#arrow-left-circle-fill' />
                </svg>
            </a>
            <span>Regresar a Usuarios</span>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 mt-1"></div>
    </div>
    <div class="row mt-1">
        <div class="row mt-3">
            <span class="text-end text-success">
                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#AyudaBuscarUser" aria-controls="AyudaBuscarUser" class="text-decoration-none text-success">
                <svg class="bi" width="18" height="18" fill="currentColor">
                    <use xlink:href="library/icons/bootstrap-icons.svg#question-circle" />
                </svg> Ayuda soporte
                </a>
            </span>
        </div>
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
    <!-- offcanva de ayuda  -->
    <div class="offcanvas offcanvas-end bg-light" tabindex="-1" id="AyudaBuscarUser" aria-labelledby="AyudaBuscarUserLabel">
        <div class="offcanvas-header">
            <h5 id="AyudaBuscarUserLabel">
                <svg class='bi' width='25' height='25' fill='currentColor'>
                    <use xlink:href='library/icons/bootstrap-icons.svg#question-circle' />
                </svg> Buscar Usuarios
            </h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
        <ul class="list-group list-group-flush">
           <li class="list-group-item bg-light text-success">1.- Dentro de la caha de texto digita al usuario a buscar.</li>
           <li class="list-group-item bg-light text-success">2.- Clic en boton buscar.</li>
           <li class="list-group-item bg-light text-success">3.- Si la busqueda tuvo exito aparecera un listado con los usuarios registrados.</li>
           <li class="list-group-item bg-light text-success">4.- Selecciona la opcion para editar los datos del usuario y/o eliminar los datos del usuario.</li>
           <li class="list-group-item bg-light text-success">5.- Si la busqueda no tuvo exito aparecera una alerta indicandote que los usuarios buscados no estan registrados.</li>
        </ul>
        </div>
    </div>
    <?php include "process/modalModificarUsuario.php"; ?>
    <?php include "process/ModalSoporte.php"; ?>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>