<nav class="navbar navbar-expand-lg navbar-dark  bg-success">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="#">IscjlchavezG</a>
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-light" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button" aria-controls="offcanvasMenu">
                        <svg class="bi" width="18" height="18" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#sliders" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="AppProgres.php">
                        <svg class="bi text-light" width="18" height="18" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#house-door-fill" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg class="bi text-light" width="18" height="18" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#gear-fill" />
                        </svg>
                    </a>
                    <ul class="dropdown-menu bg-success" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item items" href="#">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="darkSwitch">
                                    <label class="form-check-label" for="darkSwitch">
                                        <svg class="bi text-light" width="22" height="22" fill="currentColor">
                                            <use xlink:href="library/icons/bootstrap-icons.svg#brightness-low" />
                                        </svg>
                                    </label><span class="text-light"> | </span> <svg class="bi text-light" width="15" height="15" fill="currentColor">
                                        <use xlink:href="library/icons/bootstrap-icons.svg#moon-stars" />
                                    </svg>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item items" href="#">
                                <svg class="bi text-light" width="15" height="15" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#sliders" />
                                </svg>&nbsp;&nbsp;<span class="text-light">Opciones de Perfil</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg class="bi text-light" width="18" height="18" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#chat-left-text-fill" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg class="bi text-light" width="18" height="18" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#question-square-fill" />
                        </svg>
                    </a>
                </li>
            </ul>
            <span class="navbar-text">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <svg class="bi text-light" width="18" height="18" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#search" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="bi text-light" width="18" height="18" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#bell-fill" />
                            </svg>
                            <span class="position-absolute top-1 start-1 translate-middle badge rounded-pill bg-danger">1</span> 
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="img/Users/<?php echo $Perfil['ImgUser']; ?>" class="rounded-circle" style="width: 30px; height: 30px;">
                        <span class="text-light"><?php echo $saludo." ".$Perfil['Nombre']; ?></span>
                        </a>
                        <ul class="dropdown-menu bg-success" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item items" href="PerfilUser">
                                    <svg class="bi text-light" width="15" height="15" fill="currentColor">
                                        <use xlink:href="library/icons/bootstrap-icons.svg#person-circle" />
                                    </svg>&nbsp;&nbsp;<span class="text-light">Perfil</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item items" href="#">
                                    <svg class="bi text-light" width="15" height="15" fill="currentColor">
                                        <use xlink:href="library/icons/bootstrap-icons.svg#calendar-fill" />
                                    </svg>&nbsp;&nbsp;<span class="text-light">Historial</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item items" href="#" data-bs-toggle="modal" data-bs-target="#CSesionModal">
                                    <svg class="bi text-light" width="17" height="17" fill="currentColor">
                                        <use xlink:href="library/icons/bootstrap-icons.svg#power" />
                                    </svg>&nbsp;&nbsp;<span class="text-light">Cerrar Sesión</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#ModalSoporte" class="text-decoration-none">
                            <svg class="bi text-light" width="18" height="18" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#headset" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="bi text-light" width="18" height="18" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#calendar2-week" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="text-light">Versión 2.1</span>
                        </a>
                    </li>
                </ul>
            </span>
        </div>
    </div>
</nav>
<!-- modal para cerrar sesion  -->
<!-- Modal -->
<div class="modal fade" id="CSesionModal" tabindex="-1" aria-labelledby="CSesionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                        <svg class="bi" width="18" height="18" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#shield-lock-fill" />
                        </svg> Cerrar Sesión</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mt-1 text-center">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <img src="img/Users/<?php echo $Perfil['ImgUser']; ?>" class="img-thumbnail rounded rounded-circle" style="width: 150px; height: 150px; border-radius:50%;">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="container text-center">
                        <br><?php echo $Perfil['Nombre'] . " ¿Quieres cerrar la sesión?" ?></br>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-outline-danger rounded-pill" data-bs-dismiss="modal">Cancelar</button>
                <a href="includes/CerrarSesion" class="btn btn-sm btn-outline-success rounded-pill">Cerrar Sesión</a>
            </div>
        </div>
    </div>
</div>