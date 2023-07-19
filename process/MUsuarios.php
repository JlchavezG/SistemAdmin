<div class="container mt-3">
    <div class="row mt-2 justify-content-center">
        <h2 class="text-center"><span>Modulo |</span><span class="text-success"> Usuarios</span> </h2>
    </div>
    <div class="row mt-2 justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-12 mt-1">
            <div class="b">
                <div class="row py-2">
                    <div class="col-sm-12 col-md-10 col-lg-6 py-2 mt-3">
                        <div class="input-group input-group-sm mb-">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Buscar</span>
                            <input type="text" name="caja_busqueda" id="caja_busqueda" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-10 col-lg-6">
                        <div class="row py-2">
                            <div class="col">
                                <div class="card shadow bg-light">
                                        <div class="row text-center">
                                            <span>Super Usuarios</span>
                                        </div>
                                    <div class="row text-center py-2">
                                        <div>
                                            <svg class="bi" width="32" height="32" fill="currentColor">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#person-fill-gear"/> 
                                            </svg>
                                            <span class="text-success" style="font-size: 25px;"><?php echo $TSuperU; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow bg-light">
                                        <div class="row text-center">
                                            <span>Usuarios Admin</span>
                                        </div>
                                    <div class="row text-center py-2">
                                        <div>
                                            <svg class="bi" width="32" height="32" fill="currentColor">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#person-fill-gear"/> 
                                            </svg>
                                            <span class="text-warning" style="font-size: 25px;"><?php echo $TAdminU; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow bg-light">
                                        <div class="row text-center">
                                            <span>Usuarios Finales</span>
                                        </div>
                                    <div class="row text-center py-2">
                                        <div>
                                            <svg class="bi" width="32" height="32" fill="currentColor">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#person-fill-gear"/> 
                                            </svg>
                                            <span class="text-secondary" style="font-size: 25px;"><?php echo $FinalU; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="row mt-3 text-center container">
        <div class="col-sm-12 col-md-12 col-lg-12 mt-1">
            <div id="datos">
               
            </div>
        </div>
    </div>  
</div>    
            