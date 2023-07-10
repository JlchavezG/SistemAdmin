<div class="modal fade" id="PerfilModal" tabindex="-1" aria-labelledby="PerfilModalLabel" aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    <svg class="bi text-success" width="20" height="20" fill="currentColor">
                        <use xlink:href="library/icons/bootstrap-icons.svg#pencil-fill" />
                    </svg> Modifificar Perfil de Usuario
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="Post">
                <div class="modal-body">
                    <input type="hidden" name="idMPerfil" value="<?php echo $Perfil['Id_Usuario']; ?>">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="Nombre">
                            <svg class="bi text-success" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#person-badge-fill" />
                            </svg>
                        </span>
                        <input type="text" name="NombrePerfil" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-Nombre" value="<?php echo $Perfil['Nombre']; ?>">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="ApaternoPerfil" class="form-control" placeholder="Apellido Paterno" aria-label="Apellido Paterno" value="<?php echo $Perfil['ApellidoP']; ?>">
                        <span class="input-group-text">
                            <svg class="bi text-success" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#person-vcard" />
                            </svg>
                        </span>
                        <input type="text" name="AmaternoPerfil" class="form-control" placeholder="Apellido Materno" aria-label="Apellido Materno" value="<?php echo $Perfil['ApellidoM']; ?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <svg class="bi text-success" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#telephone-fill" />
                            </svg>
                        </span>
                        <input type="tel" name="TelefonoPerfil" class="form-control" placeholder="Telefono" aria-label="Telefono" aria-describedby="basic-Tel" value="<?php echo $Perfil['Telefono']; ?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <svg class="bi text-success" width="20" height="20" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#envelope-paper-fill" />
                            </svg>
                        </span>
                        <input type="email" name="EmailPerfil" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-Email" value="<?php echo $Perfil['Email']; ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-sm btn-outline-success rounded-pill" name="btn_Mperfil" value="Modificar Perfil">
                    <button type="button" class="btn btn-sm btn-outline-danger rounded-pill" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>