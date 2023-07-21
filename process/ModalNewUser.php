<!-- Modal -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="NewUserModal" tabindex="-1" aria-labelledby="NewUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-light">
      <div class="modal-header">
        <h5 class="modal-title" id="NewUserModalLabel">
          <svg class="bi" width="20" height="20" fill="currentColor">
            <use xlink:href="library/icons/bootstrap-icons.svg#person-add"/> 
          </svg>
          <span> Nuevo Usuario</span>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">  
        <div class="container">
            
            <div class="row mt-1">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="input-group mb-1">
                      <span class="input-group-text" id="Nom">
                          <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#person-vcard"/> 
                          </svg>
                      </span>
                      <input type="text" class="form-control" name="Nombre" placeholder="Nombre" aria-label="Nombre" required /> 
                    </div>
                </div>
            </div>
            
            <div class="row mt-1">
              <div class="input-group mb-1">
                <input type="text" class="form-control" name="ApellidoP" placeholder="Apellido Paterno" aria-label="Apellido Paterno" required />
                <span class="input-group-text">
                      <svg class="bi" width="20" height="20" fill="currentColor">
                        <use xlink:href="library/icons/bootstrap-icons.svg#plus-square-fill"/> 
                      </svg>
                </span>
                <input type="text" class="form-control" name="ApellidoM" placeholder="Apellido Materno" aria-label="Apellido Materno" required />
              </div>  
            </div>
            
            <div class="row mt-1">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6"> 
                            <div class="input-group mb-1">
                              <span class="input-group-text" id="basic-addon1">
                                <svg class="bi" width="20" height="20" fill="currentColor">
                                  <use xlink:href="library/icons/bootstrap-icons.svg#phone-vibrate-fill"/> 
                                </svg>
                              </span>
                              <input type="tel" class="form-control" name="Telefono" placeholder="Telefono" aria-label="Telefono" aria-describedby="basic-addon1" required />
                            </div>
                        </div> 
                        <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="input-group mb-1">
                              <span class="input-group-text" id="basic-addon1">
                                  <svg class="bi" width="20" height="20" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#envelope-paper-fill"/> 
                                  </svg>     
                              </span>
                              <input type="email" name="Email" class="form-control" placeholder="Email" aria-label="Email" required />
                            </div>
                        </div> 
                    </div>

                    <div class="row mt-1">
                      <div class="col-sm-12 col-md-12 col-lg-12">
                          <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                              <div class="form-floating">
                                <select class="form-select" name="Plantel" id="Plantel" aria-label="Selecciona al plantel" required>
                                    <option selected>Selecciona el plantel</option>
                                    <option value="2">Naucalpan I</option>
                                    <option value="3">Naucalpan II</option>
                                    <option value="1">Tlanepantla</option>
                                </select>
                                <label for="Planetl">Plantel Asignado</label>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-floating">
                                <select class="form-select" name="Tusuario" id="Tusuario" aria-label="Selecciona el tipo de usuario" required>
                                    <option selected>Selecciona el tipo de usuario</option>
                                    <option value="2">Super Usuario</option>
                                    <option value="3">Administrativo</option>
                                    <option value="1">Usuario Final</option>
                                </select>
                                <label for="Planetl">Tipo de usuario Asignado</label>
                              </div>
                            </div>
                            </div>
                      </div>
                    </div>

                <div class="row mt-2">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6"> 
                            <div class="input-group mb-1">
                              <span class="input-group-text" id="basic-addon1">
                                <svg class="bi" width="20" height="20" fill="currentColor">
                                  <use xlink:href="library/icons/bootstrap-icons.svg#journal-bookmark"/> 
                                </svg>
                              </span>
                              <input type="text" class="form-control" name="UserName" placeholder="Nombre de Usuario" aria-label="UserName" required />
                            </div>
                        </div> 
                        <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="input-group mb-1">
                              <span class="input-group-text" id="basic-addon1">
                                  <svg class="bi" width="20" height="20" fill="currentColor">
                                    <use xlink:href="library/icons/bootstrap-icons.svg#lock-fill"/> 
                                  </svg>     
                              </span>
                              <input type="password" name="Password" class="form-control" placeholder="Password" aria-label="Password" required />
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-outline-success rounded-pill" data-bs-dismiss="modal">Cancelar</button>
        <input type="submit" class="btn btn-sm btn-outline-danger rounded-pill" name="btnRegistrar" value="Registrar">
      </div>
    </form>    
    </div>
  </div>
</div>
