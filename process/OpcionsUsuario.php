<div class="container">
    <div class="row mt-2">
        <div class="col-sm-6 col-md-6 col-lg-6">
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 mt-2">
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
        
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="row mt-3 py-2">
                <div class="card shadow bg-light">
                    <div class="table-responsive container py-2">
                        <div class="table table-sm table-striped">
                        <table class="table">
                                <thead>
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
                                    <th scope="row"><img src="img/Users/<?php echo $row['ImgUser']; ?>" style="width:40px; height:40px;" class="rounded-pill"></th>
                                    <td scope="row" class="align-middle"><?php echo $row['Nombre']; ?></td>
                                    <td scope="row" class="align-middle"><?php echo $row['ApellidoP']; ?></td>
                                    <td scope="row" class="align-middle"><?php echo $row['ApellidoM']; ?></td>
                                    <td scope="row" class="align-middle"><?php echo $row['Telefono']; ?></td>
                                    <td scope="row" class="align-middle"><?php echo $row['Email']; ?></td>
                                    <td scope="row" class="align-middle"><?php echo $row['NombrePlantel']; ?></td>
                                    <td scope="row" class="align-middle"><?php echo $row['NTUsuario']; ?></td>
                                    <td scope="row" class="align-middle"><?php echo $row['UserName']; ?></td>
                                    <td scope="row" class="align-middle"><?php echo $row['FechaReg']; ?></td>
                                    <td scope="row" class="align-middle"><?php echo $row['Online']; ?></td>
                                    <td scope="row" class="align-middle"><?php echo $row['EstatusUser']; ?></td>
                                    <td scope="row" class="align-middle">
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
    </div>
</div>
<?php include "process/ModalSoporte.php"; ?>
<?php include "process/footer.php"; ?>