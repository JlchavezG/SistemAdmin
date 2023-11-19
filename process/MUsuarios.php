<?php 
 include "../includes/Acciones.php";
?>
<div class="container mt-3">
    <div class="row mt-2 justify-content-center">
        <?php echo $AccionUser; ?>
        <h3 class="text-center display-6 fs-5">Modulo Usuarios <span class="text-success"> Sistemas</span></h3>
    </div>
    <div class="row mt-1 justify-content-center">
        <div class="container">
            <div class="col-sm-12 col-md-12 col-lg-12">
            </div>
        </div>
    </div>
    <div class="row mt-2 justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-12 mt-1">
            <div class="b">
                <div class="row py-2">
                    <div class="col-sm-12 col-md-12 col-lg-6 py-2 mt-1">
                        <div class="card shadow bg-light">
                            <div class="row text-center">
                                <span class="text-muted py-2">Grafica de Usuarios</span>
                                <canvas id="myChart" style="position: relative; height:40vh; width:80vw"></canvas>
                            </div>    
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        
                        <div class="row mt-2">
                            <span class="text-center fw-light">Generación de Reportes</span>
                            <div class="col-sm-12 col-md-12 col-lg-12 mt-2">
                                <div class="card shadow bg-light">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item bg-light">
                                            <svg class="bi text-success" width="20" height="20" fill="currentColor">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#file-earmark-spreadsheet"/> 
                                            </svg>
                                            <span>
                                                <a href="includes/RUsuario_Excel" class="text-decoration-none text-muted">&nbsp; Reporte General en Excel</a> 
                                            </span>
                                        </li>
                                        <li class="list-group-item bg-light">
                                            <svg class="bi text-success" width="20" height="20" fill="currentColor">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#file-earmark-pdf-fill"/> 
                                            </svg>
                                            <span>
                                                <a href="includes/RUsuario_pdf.php" target="_blank" class="text-decoration-none text-muted">&nbsp; Reporte General en PDF </a> 
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <form action="includes/Rusuario_Fechas.php" target="_blank" method="POST">
                                <div class="row mt-1">
                                    <div class="col-sm-12 col-md-4 col-lg-4 mt-1">
                                        <input type="date" name="Fecha1" id="Fecha1" class="form-control" required />
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-lg-4 mt-1">
                                        <input type="date" name="Fecha2" id="Fecha2" class="form-control" required />
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-lg-4 mt-2">
                                        <div class="d-grid gap-2">
                                            <input type="submit" name="btnBuscarF" value="Generar Reporte por fechas" class="btn btn-sm btn-outline-success rounded-pill"/>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 mt-2">
                            <div class="card shadow bg-light">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item bg-light">
                                            <svg class="bi text-success" width="20" height="20" fill="currentColor">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#plus-circle-fill"/> 
                                            </svg>
                                            <span>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#NewUserModal" class="text-decoration-none text-muted">&nbsp; Nuevo Usuario</a> 
                                            </span>
                                        </li>
                                        <li class="list-group-item bg-light">
                                            <svg class="bi text-success" width="20" height="20" fill="currentColor">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#search"/> 
                                            </svg>
                                            <span>
                                                <a href="BuscarUsuarios" class="text-decoration-none text-muted">&nbsp; Buscar Usuarios </a> 
                                            </span>
                                        </li>
                                        <li class="list-group-item bg-light">
                                            <svg class="bi text-success" width="20" height="20" fill="currentColor">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#menu-app"/> 
                                            </svg>
                                            <span>
                                                <a href="OptionUser" class="text-decoration-none text-muted">&nbsp; Opciones de Usuario </a> 
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="row mt-2">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="row py-2 mt-2">
                    <div class="col">
                        <div class="card shadow bg-light">
                            <div class="row text-center">
                                <span>Activos</span>
                            </div>
                            <div class="row text-center py-2">
                                <div>
                                    <svg class="bi text-success" width="32" height="32" fill="currentColor">
                                        <use xlink:href="library/icons/bootstrap-icons.svg#person-check"/> 
                                    </svg>
                                    <span class="text-success" style="font-size: 25px;"><?php echo $TUserAct; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow bg-light">
                            <div class="row text-center">
                                <span>Usuarios Online</span>
                            </div>
                            <div class="row text-center py-2">
                                <div>
                                    <svg class="bi text-danger" width="32" height="32" fill="currentColor">
                                        <use xlink:href="library/icons/bootstrap-icons.svg#globe-americas"/> 
                                    </svg>
                                    <span class="text-warning" style="font-size: 25px;"><?php echo $TCOnUser; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow bg-light">
                            <div class="row text-center">
                                <span>Total de Usuarios</span>
                            </div>
                            <div class="row text-center py-2">
                                <div>
                                    <svg class="bi text-muted" width="32" height="32" fill="currentColor">
                                        <use xlink:href="library/icons/bootstrap-icons.svg#hand-index-fill"/> 
                                    </svg>
                                    <span class="text-secondary" style="font-size: 25px;"><?php echo $TUsuarios; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow bg-light">
                            <div class="row text-center">
                                <span>Notificaciones</span>
                            </div>
                            <div class="row text-center py-2">
                                <div>
                                    <svg class="bi text-warning" width="32" height="32" fill="currentColor">
                                        <use xlink:href="library/icons/bootstrap-icons.svg#bell-fill"/> 
                                    </svg>
                                    <span class="text-secondary" style="font-size: 25px;"><?php  ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
            data: [<?php echo $TUsuarios ?>, <?php echo $TSuperU ?>, <?php echo $TAdminU ?>, <?php echo $TDocenteUser ?>, <?php echo $TAlumnoUserUser ?>, <?php echo $TuserReg ?>],
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