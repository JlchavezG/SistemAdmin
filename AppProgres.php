<!DOCTYPE html>
<html lang="es">
    <head>
        <title>DashBoard del Sistema</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/dark.css" rel="stylesheet" type="text/css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.7.0.min.js"></script>
    </head>
    <body>
        <!-- Inicia el navbar-->
        <div class="navbar navbar-expand-lg navbar-light bg-dark-subtle">
            <div class="container-fluid">
              <a class="navbar-brand text-secondary" href="#">IscjlchavezG</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarTest" aria-controls="navbarText"
                  aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <svg class="bi" width="18" height="18" fill="currentColor">
                             <use xlink:href="library/icons/bootstrap-icons.svg#grip-vertical"/>
                          </svg>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">
                              <svg class="bi" width="18" height="18" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#house-door-fill"/>
                              </svg>
                           </a>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle text-secondary" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"aria-expanded="false">
                               <svg class="bi" width="18" height="18" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#gear-fill"/>
                              </svg>
                           </a>
                           <ul class="dropdown-menu bg-light" aria-labelledby="navbarDropdownMenuLink">
                              <li>
                                 <a href="#" class="dropdown-item">
                                    <div class="form-check form-switch">
                                        <input type="checkbox"  class="form-check-input" role="switch" id="darkSwitc">
                                        <label for="darkSwitch" class="form-check-label">
                                        <svg class="bi" width="18" height="18" fill="currentColor">
                                           <use xlink:href="library/icons/bootstrap-icons.svg#brightness-low"/>
                                        </svg>
                                        </label> | <svg class="bi" width="18" height="18" fill="currentColor">
                                           <use xlink:href="library/icons/bootstrap-icons.svg#moon-stars"/>
                                        </svg>
                                    </div>
                                 </a>
                              </li>
                           </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    <script src="js/dark-mode.js"></script>
    </body>
</html>