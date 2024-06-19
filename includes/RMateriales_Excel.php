<?php 
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename = ReporteMateriales.xls");
include "../includes/ConectBd.php";
include "../includes/consultas.php";
?>
<table class="table">
    <thead class="bg-light">
        <tr>
            <th scope="col">Nombre de Material</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Categoria</th>
            <th scope="col">Existencia</th>
            <th scope="col">Stock</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <?php while($row = $EMateriales->fetch_assoc()) { ?>   
        <td scope="row" class="align-middle bg-light"><?php echo $row['NomMaterial']; ?></td>
        <td scope="row" class="align-middle bg-light"><?php echo $row['DescripMaterial']; ?></td>
        <td scope="row" class="align-middle bg-light"><?php echo $row['NombreCate']; ?></td>
        <td scope="row" class="align-middle bg-light"><?php echo $row['Cantidad']; ?></td>
        <td scope="row" class="align-middle bg-light"><?php echo $row['Stok']; ?></td>
        </tr>  
            <?php } ?>
    </tbody>
</table> 