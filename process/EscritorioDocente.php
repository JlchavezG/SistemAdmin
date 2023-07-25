<div class="container justify-content-center">
    <div class="row py-2 px-2 mt-3 text-center mt-5">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="border-bottom rounded-top border-1 border-success bg-light py-2 shadow">
                <div class="row mt-2">
                    <div class="col mb-2">
                        <span class="fw-light fs-6">Usuarios Online</span>&nbsp;&nbsp;&nbsp;<b><?php echo $TCOnUser; ?></b>
                    </div>
                    <div class="col mb-2">
                        <svg class="bi" width="30" height="30" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#toggle2-on" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="border-bottom rounded-top border-1 border-warning bg-light py-2 shadow">
                <div class="row mt-2">
                    <div class="col mb-2">
                        <span class="fw-light fs-6">Materiales</span>&nbsp;&nbsp;&nbsp;<b><?php echo $TMateriales; ?></b>
                    </div>
                    <div class="col mb-2">
                        <svg class="bi" width="30" height="30" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#tags-fill" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-2 px-2 mt-3 text-center mt-3">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="border-bottom rounded-top border-1 border-success bg-light py-2 shadow">
                <div class="row mt-2">
                    <div class="col mb-2">
                        <span class="fw-light fs-6"><?php echo $Perfil['Nombre']." ".$Perfil['ApellidoP']." ".$Perfil['ApellidoM'] ?></span>

                    </div>
                    <div class="col mb-2">
                        <svg class="bi" width="30" height="30" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#person-vcard-fill" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="border-bottom rounded-top border-1 border-warning bg-light py-2 shadow">
                <div class="row mt-2">
                    <div class="col mb-2">
                        <span class="fw-light fs-6"><?php echo $Perfil['NTUsuario']; ?></span>
                    </div>
                    <div class="col mb-2">
                        <svg class="bi" width="30" height="30" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#person-gear" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- termina la linea -->
    <div class="row py-2 px-2 mt-3 text-center mt-3">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="border-bottom rounded-top border-1 border-success bg-light py-2 shadow">
                <div class="row mt-2">
                    <div class="col mb-2">
                        <span class="fw-light">Fecha: <?php echo $FechaD; ?></span>

                    </div>
                    <div class="col mb-2">
                        <svg class="bi" width="30" height="30" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#calendar-week" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="border-bottom rounded-top border-1 border-warning bg-light py-2 shadow">
                <div class="row mt-2">
                    <div class="col mb-2">
                        <span class="fw-light fs-6">
                          <form name="form_reloj" class="bg-light">
                            <input type="text" name="reloj" size="10" class="border-0 px-2 bg-light">
                          </form>
                        </span>
                    </div>
                    <div class="col mb-2">
                        <svg class="bi" width="30" height="30" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#clock-history" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 mt-3">
            <div class="border-bottom rounded-top border-1 border-primary bg-light py-2 shadow">
                <div class="row mt-2">
                    <div class="col mb-2">
                        <span class="fw-light fs-6">PLantel: <?php echo $Perfil['NombrePlantel']; ?></span>
                    </div>
                    <div class="col mb-2">
                        <svg class="bi" width="30" height="30" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#building" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    <div class="row py-2 px-2 mt-3 text-center mt-3">
        <div class="container justify-content-center">
            1
        </div>
    </div>










</div>