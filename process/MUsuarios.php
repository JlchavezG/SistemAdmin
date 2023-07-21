<div class="container mt-3">
    <div class="row mt-2 justify-content-center">
        <h2 class="text-center"><span>Modulo |</span><span class="text-success"> Usuarios</span> </h2>
    </div>
    <div class="row mt-2 justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-12 mt-1">
            <div class="b">
                <div class="row py-2">
                    <div class="col-sm-12 col-md-12 col-lg-6 py-2 mt-1">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="needs-validation" novalidate method="POST"/>
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="C_buscar" placeholder="Usuario a buscar" aria-label="Busqueda" aria-describedby="button-addon2" required>
                                <button class="btn btn-outline-success" type="submit" id="buscar" name="buscar">Buscar</button>
                            </div>
                        </div>
                        </form>
                        <div class="card shadow bg-light">
                            <div class="row text-center">
                                <span class="text-muted py-2">Grafica de Usuarios</span>
                                <canvas id="myChart" style="position: relative; height:40vh; width:80vw"></canvas>
                            </div>    
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="row py-2">
                            <div class="col">
                                <div class="card shadow bg-light">
                                        <div class="row text-center">
                                            <span>Super Usuarios</span>
                                        </div>
                                    <div class="row text-center py-2">
                                        <div>
                                            <svg class="bi" width="32" height="32" fill="currentColor">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#person-fill-gear"/> 
                                            </svg>
                                            <span class="text-success" style="font-size: 25px;"><?php echo $TSuperU; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow bg-light">
                                        <div class="row text-center">
                                            <span>Usuarios Admin</span>
                                        </div>
                                    <div class="row text-center py-2">
                                        <div>
                                            <svg class="bi" width="32" height="32" fill="currentColor">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#person-check"/> 
                                            </svg>
                                            <span class="text-warning" style="font-size: 25px;"><?php echo $TAdminU; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow bg-light">
                                        <div class="row text-center">
                                            <span>Usuarios Finales</span>
                                        </div>
                                    <div class="row text-center py-2">
                                        <div>
                                            <svg class="bi" width="32" height="32" fill="currentColor">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#person-fill"/> 
                                            </svg>
                                            <span class="text-secondary" style="font-size: 25px;"><?php echo $TFinalU ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-12 col-lg-12 mt-2">
                                <div class="card shadow bg-light">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item bg-light">
                                            <svg class="bi text-success" width="20" height="20" fill="currentColor">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#app-indicator"/> 
                                            </svg><span>&nbsp; Usuarios Activos: <span class="text-muted text-end fs-5"><?php echo $TUserAct; ?></span></span>
                                        </li>
                                        <li class="list-group-item bg-light">
                                            <svg class="bi text-primary" width="20" height="20" fill="currentColor">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#app-indicator"/> 
                                            </svg><span>&nbsp; Total de Usuarios:<span class="text-muted text-end fs-5"> <?php echo $TUsuarios; ?></span></span>
                                        </li>
                                        <li class="list-group-item bg-light">
                                            <svg class="bi text-danger" width="20" height="20" fill="currentColor">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#app-indicator"/> 
                                            </svg><span>&nbsp; Usuarios en linea: <span class="text-muted text-end fs-5"><?php echo $TCOnUser; ?></span></spa>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 mt-2">
                                <div class="d-grid gap-2">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#NewUserModal" class="btn btn-outline-success rounded-pill py-1">
                                        <svg class="bi" width="20" height="20" fill="currentColor">
                                            <use xlink:href="library/icons/bootstrap-icons.svg#plus-circle-fill"/> 
                                        </svg><span>&nbsp; Nuevo Usuario</a>
                                </div>
                                <div class="d-grid gap-2 mt-2">
                                    <a href="#"  class="btn btn-outline-success rounded-pill py-1">
                                        <svg class="bi" width="20" height="20" fill="currentColor">
                                            <use xlink:href="library/icons/bootstrap-icons.svg#gear-wide-connected"/> 
                                        </svg><span>&nbsp; Opciones de Usuario</a>
                                </div>
                                <div class="d-grid gap-2 mt-2">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#ModalReporteUser" class="btn btn-outline-success rounded-pill py-1">
                                        <svg class="bi" width="20" height="20" fill="currentColor">
                                            <use xlink:href="library/icons/bootstrap-icons.svg#file-earmark-bar-graph-fill"/> 
                                        </svg><span>&nbsp; Generar Reportes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="row mt-3 text-center ">
        <div class="col-sm-12 col-md-12 col-lg-12 mt-1">
            <div class="card shadow bg-light py-3" id="datos">
                    <?php echo $datosM;?>
            </div>
        </div>
    </div>  
</div>  
<?php include "process/ModalSoporte.php"; ?>
<?php include "process/ModalUserReportes.php";?>
<?php include "process/footer.php"; ?>

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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
 var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Total de Usuarios', 'SuperUsuarios', 'Administrativos', 'Docentes', 'Alumnos', 'Usuarios 2023'],
        datasets: [{
            label: 'Usuarios Registrados',
            data: [<?php echo $TUsuarios ?>, <?php echo $TSuperU ?>, <?php echo $TAdminU ?>, <?php echo $TDocenteUser ?>, <?php echo $TAlumnoUser ?>, <?php echo $TuserReg ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
