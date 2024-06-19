<div class="container mt-3">
    <div class="row mt-2 justify-content-center">
        <?php echo $AccionUser; ?>
        <h3 class="text-center display-6 fs-5">Modulo Materiales <span class="text-success"> Sistemas</span></h3>
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
                                <span class="text-muted py-2">Grafica de Materiales</span>
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
                                                <a href="includes/RMateriales_Excel" class="text-decoration-none text-muted">&nbsp; Reporte General en Excel</a> 
                                            </span>
                                        </li>
                                        <li class="list-group-item bg-light">
                                            <svg class="bi text-success" width="20" height="20" fill="currentColor">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#file-earmark-pdf-fill"/> 
                                            </svg>
                                            <span>
                                                <a href="includes/RMateriales_pdf" target="_blank" class="text-decoration-none text-muted">&nbsp; Reporte General en PDF </a> 
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
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
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#NewUserModal" class="text-decoration-none text-muted">&nbsp; Ingresar Material</a> 
                                            </span>
                                        </li>
                                        <li class="list-group-item bg-light">
                                            <svg class="bi text-success" width="20" height="20" fill="currentColor">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#search"/> 
                                            </svg>
                                            <span>
                                                <a href="BuscarMaterial" class="text-decoration-none text-muted">&nbsp; Buscar Material </a> 
                                            </span>
                                        </li>
                                        <li class="list-group-item bg-light">
                                            <svg class="bi text-success" width="20" height="20" fill="currentColor">
                                                <use xlink:href="library/icons/bootstrap-icons.svg#menu-app"/> 
                                            </svg>
                                            <span>
                                                <a href="OptionMateriales" class="text-decoration-none text-muted">&nbsp; Administrar Materiales </a> 
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
                                <span>Total de Materiales</span>
                            </div>
                            <div class="row text-center py-2">
                                <div>
                                    <svg class="bi text-success" width="32" height="32" fill="currentColor">
                                        <use xlink:href="library/icons/bootstrap-icons.svg#box-seam-fill"/> 
                                    </svg>
                                    <span class="text-success" style="font-size: 25px;"><?php echo $TotalMateriales; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow bg-light">
                            <div class="row text-center">
                                <span>Vales de materiales</span>
                            </div>
                            <div class="row text-center py-2">
                                <div>
                                    <svg class="bi text-danger" width="32" height="32" fill="currentColor">
                                        <use xlink:href="library/icons/bootstrap-icons.svg#journal"/> 
                                    </svg>
                                    <span class="text-warning" style="font-size: 25px;">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow bg-light">
                            <div class="row text-center">
                                <span>Bitacoras</span>
                            </div>
                            <div class="row text-center py-2">
                                <div>
                                    <svg class="bi text-muted" width="32" height="32" fill="currentColor">
                                        <use xlink:href="library/icons/bootstrap-icons.svg#clipboard-check-fill"/> 
                                    </svg>
                                    <span class="text-secondary" style="font-size: 25px;"><?php  ?></span>
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
                                    <span class="text-secondary" style="font-size: 25px;"><?php echo $TalertasM; ?></span>
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
    type: 'line',
    data: {
        labels: ['Total de Materiales', 'Consumibles', 'Activo Fijo', 'Equipos de computo'],
        datasets: [{
            label: 'Materiales Registrados',
            data: [<?php echo $TotalMateriales; ?>, <?php echo $TotalesM;  ?>, <?php echo $TotalesMA; ?>],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 99, 132, 0.2)',
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