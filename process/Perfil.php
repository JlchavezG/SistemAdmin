<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col col-sm-10 col-md-10 col-lg-10">
            <div class="Img-Hover">
                <div class="row mt-2 mx-2 justify-content-center">
                    <img src="img/Users/<?php echo $Perfil['ImgUser']; ?>" class="img-thumbnail rounded-circle" style="width: 200px;">
                </div>
                <div class="row mt-4 text-center justify-content-center">
                    <span class="display-6"><?php echo $Perfil['Nombre']." ".$Perfil['ApellidoP']." ".$Perfil['ApellidoM']; ?></span>
                </div>
                <div class="row mt-4  justify-content-center">
                    <div class="col col-sm-10 col-md-4 col-lg-4">
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
                            </li>
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
                    <div class="col col-sm-10 col-md-6 col-lg-6">
                       <?php // echo '<img src="'.$FileName.'" class="rounded mx-auto img-thumbnail">' ?>
                    </div>
                </div>

                <div class="row mt-4 text-center justify-content-center">
                    <div class="col-sm-1 col-md-1 col-lg-1 rounded  text-light me-1">
                        <div class="row mt-1 py-2">
                            <svg class="bi text-success" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#envelope-paper-fill" />
                            </svg>
                        </div>
                        <div class="row mt-1 py-1 text-center">
                            <span></span>
                        </div>
                    </div>
                    <div class="col-sm-1 col-md-1 col-lg-1 rounded  text-light me-1">
                        <div class="row mt-1 py-2">
                            <svg class="bi text-success" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#printer-fill" />
                            </svg>
                        </div>
                        <div class="row mt-1 py-1 text-center">
                            <span></span>
                        </div>
                    </div>
                    <div class="col-sm-1 col-md-1 col-lg-1 rounded  text-light me-1">
                        <div class="row mt-1 py-2">
                            <svg class="bi text-success" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#pencil-fill" />
                            </svg>
                        </div>
                        <div class="row mt-1 py-1 text-center">
                            <span></span>
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </div>
</div>