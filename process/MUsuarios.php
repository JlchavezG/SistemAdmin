<div class="container mt-3">
    <div class="row mt-2 justify-content-center">
        <h2 class="text-center"><span>Modulo |</span><span class="text-success"> Usuarios</span> </h2>
    </div>
    <div class="row mt-2 justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-12 mt-1">
            <div class="b">
                <div class="row py-2">
                    <div class="col-sm-12 col-md-10 col-lg-6 py-2">
                        <form action="" method="$_POST">
                        <div class="input-group input-group-sm mb-">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Buscar</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        </form>
                    </div>
                    <div class="col-sm-12 col-md-10 col-lg-5 mt-1 text-center">
                        <div class="row container text-center">
                                <div class="col">
                                    <svg class="bi text-success" width="15" height="15" fill="currentColor">
                                        <use xlink:href="library/icons/bootstrap-icons.svg#box-fill" />
                                    </svg><span>&nbsp;Super Usuario</span>&nbsp;
                                    <svg class="bi text-warning" width="15" height="15" fill="currentColor">
                                        <use xlink:href="library/icons/bootstrap-icons.svg#box-fill" />
                                    </svg><span>&nbsp;Usuario Administrativo</span>
                                </div>
                        
                        </div>
                        <span>Tipos de Usuarios:</span> 
                        <svg class="bi text-success" width="30" height="30" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#person-fill-gear" />
                        </svg>
                        <span class="text-muted" style="font-size: 40px;">&nbsp;<?php echo $TSuperU; ?></span> 
                        <svg class="bi text-warning" width="30" height="30" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#person-check" />
                        </svg>
                        <span class="text-muted" style="font-size: 40px;">&nbsp;<?php echo $TAdminU; ?></span> 
                        <svg class="bi text-secondary" width="23" height="23" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#person-fill" />
                        </svg>
                        <span class="text-muted" style="font-size: 40px;">&nbsp;<?php echo $TAdminU; ?></span> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="container" id="Datos">
        </div>
    </div>
</div>