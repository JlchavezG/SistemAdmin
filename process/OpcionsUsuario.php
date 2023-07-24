<div class="container">
    <div class="row mt-2">
        <div class="col-sm-6 col-md-6 col-lg-6">
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 mt-2">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="row mt-1">
                <div class="col-sm-12 col-md-4 col-lg-4 mt-1">
                    <input type="date" name="Fecha1" id="Fecha1" class="form-control" required />
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 mt-1">
                    <input type="date" name="Fecha2" id="Fecha2" class="form-control" required />
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 mt-2">
                    <input type="submit" name="btnBuscarF" value="Generar Reporte" class="btn btn-sm btn-outline-success rounded-pill"/>
                </div>
            </div>
        </form>    
        
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="row mt-3 py-2">
                <div class="card shadow bg-light">
                    <div class="table-responsive container py-2">
                        <div class="table table-sm table-striped">
                        <table class="table">
                                <thead class="bg-light">
                                    <tr>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">ApellidoP</th>
                                        <th scope="col">ApellidoM</th>
                                        <th scope="col">Telefono</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">PlantelAsignado</th>
                                        <th scope="col">TipoUsuario</th>
                                        <th scope="col">UserName</th>
                                        <th scope="col">FechaRegistro</th>
                                        <th scope="col">Online</th>
                                        <th scope="col">Estatus</th>
                                        <th scope="col">Opciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <?php while($row = $EjecutaUserG->fetch_assoc()) { ?>
                                    <th scope="row" class="bg-light"><img src="img/Users/<?php echo $row['ImgUser']; ?>" style="width:40px; height:40px;" class="rounded-pill"></th>
                                    <td scope="row" class="align-middle bg-light"><?php echo $row['Nombre']; ?></td>
                                    <td scope="row" class="align-middle bg-light"><?php echo $row['ApellidoP']; ?></td>
                                    <td scope="row" class="align-middle bg-light"><?php echo $row['ApellidoM']; ?></td>
                                    <td scope="row" class="align-middle bg-light"><?php echo $row['Telefono']; ?></td>
                                    <td scope="row" class="align-middle bg-light"><?php echo $row['Email']; ?></td>
                                    <td scope="row" class="align-middle bg-light"><?php echo $row['NombrePlantel']; ?></td>
                                    <td scope="row" class="align-middle bg-light"><?php echo $row['NTUsuario']; ?></td>
                                    <td scope="row" class="align-middle bg-light"><?php echo $row['UserName']; ?></td>
                                    <td scope="row" class="align-middle bg-light"><?php echo $row['FechaReg']; ?></td>
                                        <?php $On = 1; if($row['Online'] == $On){
                                            $IconOn = "<svg class='bi text-success' width='15' height='15' fill='currentColor'>
                                                        <use xlink:href='library/icons/bootstrap-icons.svg#circle-fill'/> 
                                                    </svg>";
                                            }
                                            else{
                                            $IconOn = "<svg class='bi text-danger' width='15' height='15' fill='currentColor'>
                                                        <use xlink:href='library/icons/bootstrap-icons.svg#circle'/> 
                                                    </svg>";
                                            } ?>
                                    <td scope="row" class="align-middle bg-light"><?php echo $IconOn; ?></td>
                                    <td scope="row" class="align-middle bg-light"><?php echo $row['DEstatusUser']; ?></td>
                                    <td scope="row" class="align-middle bg-light">
                                        <svg class='bi text-success' width='15' height='15' fill='currentColor'>
                                            <use xlink:href='library/icons/bootstrap-icons.svg#pencil-fill'/> 
                                        </svg> - 
                                        <svg class='bi text-success' width='15' height='15' fill='currentColor'>
                                            <use xlink:href='library/icons/bootstrap-icons.svg#trash3-fill'/> 
                                        </svg>
                                    </td>
                                    </tr>  
                                    <?php } ?>
                                </tbody>
                                
                        </table>        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2 justify-content-center">
            <div class="col-sm-10 col-md-10 col-lg-10">
                <nav aria-label="Paginacion">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Siguiente</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<?php include "process/ModalSoporte.php"; ?>
<?php include "process/footer.php"; ?>