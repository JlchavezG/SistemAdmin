<div class="modal fade" id="PasswordlModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title"> 
                    <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#shield-lock-fill"/>
                    </svg> Modificar Password de Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="off">
            <div class="modal-body">
                <input type="hidden" name="IdPass" value="<?php echo $Perfil['Id_Usuario']; ?>">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">
                        <svg class="bi" width="15" height="15" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#lock-fill"/>
                        </svg>
                    </span>
                    <input type="password" class="form-control" name="PasswordAc" placeholder="Password Actual" id="VerPassWord" aria-label="Password" required />
                </div>
                <div class="input-group flex-nowrap mt-2">
                    <span class="input-group-text" id="addon-wrapping">
                        <svg class="bi" width="15" height="15" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#key-fill"/>
                        </svg>
                    </span>
                    <input type="password" class="form-control" name="NewPassword" placeholder="Nuevo Password" id="VerPassWord" aria-label="NPassword" required />
                </div>
                <div class="input-group flex-nowrap mt-2">
                    <span class="input-group-text" id="addon-wrapping">
                        <svg class="bi" width="15" height="15" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#key-fill"/>Password
                        </svg>
                    </span>
                    <input type="password" class="form-control" name="PasswordCon" id="VerPassWord" placeholder="Confirma tu Password" aria-label="CPassword" required />
                </div>
                <div class="row mt-2">
                
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" name="MoPassword" value="Modificar Password" class="btn btn-sm btn-outline-success rounded-pill">
            </div>
            </form>
                
        </div>
    </div>
</div>

