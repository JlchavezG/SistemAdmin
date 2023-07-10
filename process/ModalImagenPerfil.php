<div class="modal fade" id="ModalImagenPerfil" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalImagenPerfilLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    <svg class="bi" width="20" height="20" fill="currentColor">
                        <use xlink:href="library/icons/bootstrap-icons.svg#camera2" />
                    </svg> Modificar Imagen Perfli
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <input type="hidden" id="IdiMGperfil" name="IdImgPerfil" value="<?php echo $Perfil['Id_Usuario']; ?>">
                        <input type="file" class="form-control" id="ImgPerfil" name="imagen" required>
                        <label class="input-group-text" for="inputGroupFile02">Subir</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" value="Modificar" name="Btn_Subir" class="btn btn-sm btn-outline-success rounded-pill">
                    <button type="button" class="btn btn-sm btn-outline-danger rounded-pill" data-bs-dismiss="modal">Cancelar</button>

                </div>
            </form>
        </div>
    </div>
</div>