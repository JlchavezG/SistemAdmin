<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename = ReporteLaboratorios.xls");
include "../includes/ConectBd.php";
include "../includes/consultas.php";
?>
<table class="table ">
    <thead class="bg-light">
        <tr>
            <th scope="col">Nombre de laboratorio</th>
            <th scope="col">Plantel</th>
            <th scope="col">Carrera</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($rowLabs = $EInnerLab->fetch_assoc()) { ?>
            <tr class="bg-light">
                <th scope="row"><?php echo $rowLabs['NombreLaboratorio']; ?></th>
                <th scope="row"><?php echo $rowLabs['NombrePlantel']; ?></th>
                <th scope="row"><?php echo $rowLabs['NombreCarrera']; ?></th>
                <th class='bg-light' scope='row'>
                    <a href="EditarLab.php?Id_Laboratorio=<?php echo $rowLabs['Id_Laboratorio']; ?>" class="text-success text-decoration-none">
                        <svg class="bi" width="15" height="15" fill="currentColor">
                            <use xlink:href='library/icons/bootstrap-icons.svg#pencil-fill' />
                        </svg>
                    </a> -
                    <a href="..includes/eliminar_lab.php?Id_Laboratorio=<?php echo $rowLabs['Id_Laboratorio']; ?>" class="text-success text-decoration-none">
                        <svg class="bi" width="15" height="15" fill="currentColor">
                            <use xlink:href='library/icons/bootstrap-icons.svg#trash-fill' />
                        </svg>
                    </a>
                </th>
        <?php } ?>
    </tbody>
</table>