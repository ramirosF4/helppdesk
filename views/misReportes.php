<?php 
  
include "header.php"; 
if(isset($_SESSION['usuario']) && $_SESSION['usuario']['rol'] == 1 ){
include "../clases/Conexion.php";
$con = new Conexion(); 
$conexion = $con->conectar(); 
?>

<div class="container mt-4">

    <div class="card shadow-sm border-0">

        <div class="card-body p-4">

            <!-- HEADER -->
            <div class="d-flex justify-content-between align-items-center mb-4">

                <div>
                    <h4 class="fw-bold text-primary mb-0">
                        <i class="fas fa-file-alt me-2"></i> Reportes de cliente
                    </h4>
                    <small class="text-muted">Consulta y gestiona tus reportes de soporte</small>
                </div>

                <button class="btn btn-primary rounded-pill px-4"
                        data-bs-toggle="modal"
                        data-bs-target="#modalCrearReporte">
                    <i class="fas fa-plus me-1"></i> Nuevo
                </button>

            </div>

            <hr>

            <!-- TABLA -->
            <div id="tablaReporteClienteLoad"></div>

        </div>

    </div>

</div>

<?php 
include "reportesCliente/modalCrearReporte.php";
include "footer.php"; 
?>

<script src="../public/js/reportesCliente/reportesCliente.js"></script>

<?php
}else {
    header("location:../index.html"); 
}
?>