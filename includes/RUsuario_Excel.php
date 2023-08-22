<?php 
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename = ReporteUsuarios.xls");
include "../includes/ConectBd.php";
include "../includes/consultas.php";
?>
<table class="table">
    <thead class="bg-light">
        <tr>
            <th scope="col">Id</th>
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
        </tr>
    </thead>
    <tbody>
        <tr>
        <?php while($row = $EjecutaUserG->fetch_assoc()) { ?>   
        <th scope="row" class="bg-light"><?php echo $row['Id_Usuario']; ?></th>
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
                $IconOn = "Usuario Online";
                }
                else{
                    $IconOn = "Usuario Ofline";
                    } ?>
        <td scope="row" class="align-middle bg-light"><?php echo $IconOn; ?></td>
        <td scope="row" class="align-middle bg-light"><?php echo $row['DEstatusUser']; ?></td>
        </tr>  
            <?php } ?>
    </tbody>
</table> 