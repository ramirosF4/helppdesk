<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "header.php"; 

if(isset($_SESSION['usuario']) && $_SESSION['usuario']['rol'] == 2){

include "../clases/Conexion.php";
$con = new Conexion();
$conexion = $con->conectar(); 
?>

<div class="container mt-4">

    <div class="card shadow-sm border-0">

        <div class="card-body p-4">


            <div class="d-flex justify-content-between align-items-center mb-4">

                <div>
                    <h4 class="fw-bold text-primary mb-0">
                        <i class="fas fa-laptop-house me-2"></i> Asignación de equipos
                    </h4>
                    <small class="text-muted">Administra la asignación de dispositivos a los usuarios</small>
                </div>

                <button class="btn btn-primary rounded-pill px-4"
                        data-bs-toggle="modal"
                        data-bs-target="#modalAsignarEquipo">
                    <i class="fas fa-plus me-1"></i> Nuevo
                </button>

            </div>

            <hr>
            <div id="tablaAsignacionesLoad"></div>

        </div>

    </div>

</div>

<?php 
include "asignacion/modalAsignar.php"; 
include "footer.php"; 
?>

<script src="../public/js/asignacion/asignacion.js"></script>

<?php
}else{
    header("location:../index.html"); 
}
?>