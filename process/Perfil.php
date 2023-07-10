<?php
$dir = 'img/qr/';
if (!file_exists($dir))
    mkdir($dir); {
    $QrPerfil = $dir . 'Usuario' . $Perfil['Id_Usuario'] . 'png';
    $tam = 4;
    $lavel = 'H';
    $FrameSize = '3';
    $QrNombre = $Perfil['Nombre'];
    $QrApellidoP = $Perfil['ApellidoP'];
    $QrApellidoM = $Perfil['ApellidoM'];
    $QrTelefono = $Perfil['Telefono'];
    $QrEmail = $Perfil['Email'];
    $QrPerfilU = $Perfil['NTUsuario'];
    $QrContenido = 'BEGIN:VCARD' . "\n";
    $QrContenido .= 'FN:' . $QrNombre . " " . $QrApellidoP . $QrApellidoM . "\n";
    $QrContenido .= 'TEL;WORK;VOICE:' . $QrTelefono . "\n";
    $QrContenido .= 'TITLE' . $QrPerfil . "\n";
    $QrContenido .= 'EMAIL' . $QrEmail . "\n";
    $QrContenido .= 'END:VCARD';
    QRcode::png($QrContenido, $QrPerfil, $lavel, $tam, $FrameSize);
}

?>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col col-sm-10 col-md-10 col-lg-10">
            <div class="">
                <div class="row mt-2 mx-2 justify-content-center">
                    <a href="#" class="text-decoration-none text-center" data-bs-toggle="modal" data-bs-target="#ModalImagenPerfil">
                        <img src="img/Users/<?php echo $Perfil['ImgUser']; ?>" class="img-thumbnail rounded-circle Img-Hover" style="width: 200px; height: 200px;">
                    </a>
                </div>
                <div class="row mt-4 text-center justify-content-center">
                    <span class="display-6"><?php echo $Perfil['Nombre'] . " " . $Perfil['ApellidoP'] . " " . $Perfil['ApellidoM']; ?></span>
                </div>
                <div class="row mt-4  justify-content-center">
                    <div class="col col-sm-10 col-md-6 col-lg-6">
                        <ul class="list-group list-group-flush rounded">
                            <li class="list-group-item bg-light">
                                <svg class="bi text-success" width="15" height="15" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#building-fill" />
                                </svg>&nbsp;&nbsp;Plantel:&nbsp;<?php echo $Perfil['NombrePlantel']; ?>
                            </li>
                            <li class="list-group-item bg-light">
                                <svg class="bi text-success" width="15" height="15" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#envelope-paper-fill" />
                                </svg>&nbsp;&nbsp;Email:&nbsp;<?php echo $Perfil['Email']; ?>
                            </li>
                            <li class="list-group-item bg-light">
                                <svg class="bi text-success" width="15" height="15" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#telephone-inbound-fill" />
                                </svg>&nbsp;&nbsp;Telefono:&nbsp;<?php echo $Perfil['Telefono']; ?>
                            <li class="list-group-item bg-light">
                                <svg class="bi text-success" width="15" height="15" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#person-vcard-fill" />
                                </svg>&nbsp;&nbsp;Tipo Usuario:&nbsp;<?php echo $Perfil['NTUsuario']; ?>
                            </li>
                            <li class="list-group-item bg-light">
                                <svg class="bi text-success" width="15" height="15" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#person-vcard-fill" />
                                </svg>&nbsp;&nbsp;Nickuser:&nbsp;<?php echo $Perfil['UserName']; ?>
                            </li>
                        </ul>
                    </div>
                    <div class="col col-sm-10 col-md-4 col-lg-4">
                        <?php echo '<img src="' . $QrPerfil . '" class="rounded mx-auto img-thumbnail"' ?> ' ?>
                    </div>
                </div>

                <div class="row mt-4 text-center justify-content-center">
                    <div class="col-sm-1 col-md-1 col-lg-1 rounded  text-light me-1">
                        <div class="row mt-1 py-2">
                            <svg class="bi text-success" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#printer-fill" />
                            </svg><span class="text-success">Imprimir Perfil</span>
                        </div>
                        <div class="row mt-1 py-1 text-center">
                            <span></span>
                        </div>
                    </div>
                    <div class="col-sm-1 col-md-1 col-lg-1 rounded  text-light me-1">
                        <div class="row mt-1 py-2">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#PerfilModal">
                                <svg class="bi text-success" width="20" height="20" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#pencil-fill" />
                                </svg>
                            </a><span class="text-success">Modificar Perfil</span>
                        </div>
                    </div>
                    <div class="col-sm-1 col-md-1 col-lg-1 rounded  text-light me-1">
                        <div class="row mt-1 py-2">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#PasswordlModal">
                                <svg class="bi text-success" width="20" height="20" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#unlock-fill" />
                                </svg>
                            </a><span class="text-success">Modificar Password</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-1 py-2 justify-content-center">
    <div class="container">
        <div class="col col-sm-12 col-md-12 col-lg-12">
            <span><?php echo $AlertaPerfil; ?></span> 
            <span><?php echo $Mensaje; ?></span>
            <span><?php echo $AlertPass; ?></span>
        </div>
    </div>
</div>

<?php include "process/ModalPerfil.php"; ?>
<?php include "process/ModalImagenPerfil.php";?>
<?php include "process/PasswordlModal.php"; ?>