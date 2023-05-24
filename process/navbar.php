<nav class="navbar navbar-expand-lg navbar-light bg-dark-subtle">
    <div class="container-fluid">
        <a class="navbar-brand text-secondary" href="#">IscjlchavezG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-secondary" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button" aria-controls="offcanvasMenu">
                        <svg class="bi" width="18" height="18" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#grip-vertical" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg class="bi text-secondary" width="18" height="18" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#house-door-fill" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-secondary" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg class="bi text-secondary" width="18" height="18" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#gear-fill" />
                        </svg>
                    </a>
                    <ul class="dropdown-menu bg-light" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="darkSwitch">
                                    <label class="form-check-label" for="darkSwitch">
                                        <svg class="bi text-secondary" width="22" height="22" fill="currentColor">
                                            <use xlink:href="library/icons/bootstrap-icons.svg#brightness-low" />
                                        </svg>
                                    </label> | <svg class="bi text-secondary" width="15" height="15" fill="currentColor">
                                        <use xlink:href="library/icons/bootstrap-icons.svg#moon-stars" />
                                    </svg>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <svg class="bi text-secondary" width="15" height="15" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#sliders" />
                                </svg>&nbsp;&nbsp;<span class="text-secondary">Opciones de Perfil</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg class="bi text-secondary" width="18" height="18" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#chat-left-text-fill" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg class="bi text-secondary" width="18" height="18" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#question-square-fill" />
                        </svg>
                    </a>
                </li>
            </ul>
            <span class="navbar-text">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <svg class="bi text-secondary" width="18" height="18" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#search" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="bi text-secondary" width="18" height="18" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#bell-fill" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-secondary" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg class="bi text-secondary" width="18" height="18" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#person-circle" />
                            </svg><span class="text-secondary"> Bienvenido: <?php echo $usuario; ?></span>
                        </a>
                        <ul class="dropdown-menu bg-light" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <svg class="bi text-secondary" width="15" height="15" fill="currentColor">
                                        <use xlink:href="library/icons/bootstrap-icons.svg#person-circle" />
                                    </svg>&nbsp;&nbsp;<span class="text-secondary">Perfil</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <svg class="bi text-secondary" width="15" height="15" fill="currentColor">
                                        <use xlink:href="library/icons/bootstrap-icons.svg#calendar-fill" />
                                    </svg>&nbsp;&nbsp;<span class="text-secondary">Historial</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider text-secondary">
                            </li>
                            <li>
                                <a class="dropdown-item" href="includes/CerrarSesion.php">
                                    <svg class="bi text-secondary" width="17" height="17" fill="currentColor">
                                        <use xlink:href="library/icons/bootstrap-icons.svg#power" />
                                    </svg>&nbsp;&nbsp;<span class="text-secondary">Cerrar Sesión</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="bi text-secondary" width="18" height="18" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#headset" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="bi text-secondary" width="18" height="18" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#calendar2-week" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="text-secondary">Versión 1.1</span>
                        </a>
                    </li>
                </ul>
            </span>
        </div>
    </div>
</nav>