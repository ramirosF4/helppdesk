<?php 
include "header.php"; 
if(isset($_SESSION['usuario']) && $_SESSION['usuario']['rol'] == 2){
?>

<div class="container mt-4">

    <div class="card shadow-sm border-0">

        <div class="card-body p-4">

         
            <div class="mb-4">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="fas fa-clipboard-list me-2"></i> Reportes
                </h4>
                <small class="text-muted">Administra y da seguimiento a los reportes del sistema</small>
            </div>

            <hr>

            <div id="tablaReporteAdminLoad"></div>

        </div>

    </div>

</div>

<?php   
include "reportesAdmin/modalAgregarSolucion.php";
include "footer.php";
?>

<script src="../public/js/reportesAdmin/reportesAdmin.js"></script>

<?php
}else {
    header("location:../index.html"); 
}
?>