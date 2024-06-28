<!-- Modal -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="NewMaterialModal" tabindex="-1"
    aria-labelledby="NewMaterialModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title" id="NewUserModalLabel">
                    <svg class="bi" width="20" height="20" fill="currentColor">
                        <use xlink:href="library/icons/bootstrap-icons.svg#pc-display-horizontal" />
                    </svg>
                    <span>  Nuevo Material</span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off"
                    class="px-3 needs-validation" novalidate enctype="multipart/form-data">
                    <div class="container">
                        <div class="row mt-1">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="input-group mb-1">
                                    <span class="input-group-text" id="Nom">
                                        <svg class="bi" width="20" height="20" fill="currentColor">
                                            <use xlink:href="library/icons/bootstrap-icons.svg#pc-display-horizontal" />
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" name="NombreMaterial" placeholder="Nombre del Material"
                                        aria-label="Nombre" required />
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="justify-content-center">
                                <textarea class="form-control" id="Descrip" name="DescripcionM" placeholder="Descripcion de material" required></textarea>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-ms-12 col-md-12 col-lg-12 mt-2">
                                <select class="form-select" aria-label="Default select example" name="categoriam" required>
                                    <option selected>Selecciona una categoria de material</option>
                                    <?php while($L = $ECatMaterial->fetch_assoc()){?>
                                    <option value="<?php echo $L['Id_Categoria']?>"><?php echo $L['NombreCate']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-ms-12 col-md-6 col-lg-6">
                                <input type="number" name="Cantidad" id="Cantidaad" class="form-control" placeholder="Existencia" max="1000" min="1" required>
                            </div>
                            <div class="col-ms-12 col-md-6 col-lg-6">
                                <input type="number" name="Stok" id="Stock" class="form-control" placeholder="Stock" max="1000" min="1" required>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Selecciona una imagen</label>
                                <input class="form-control" type="file" id="formFile" name="imagen">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-outline-danger rounded-pill"
                                data-bs-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn btn-sm btn-outline-success rounded-pill" name="btnRegistrarMat"
                                value="Registrar Nuevo Material">
                        </div>
                    </div>    
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
<script type='text/javascript'>
    $(function () {
        $(document).bind("contextmenu", function (e) {
            return false;
        });
    });
</script>