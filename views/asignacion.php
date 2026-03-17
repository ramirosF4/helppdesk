<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "header.php"; 

if(isset($_SESSION['usuario']) && $_SESSION['usuario']['rol'] == 2){

    include "../clases/Conexion.php";
    $con = new Conexion();
    $conexion = $con->conectar(); 
?>

<div class="container">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">

            <h1 class="fw-light">Asignación de equipos</h1>

            <div class="lead">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAsignarEquipo">
                    <span class="fas fa-plus"></span>Asignar equipo
                </button>
                <hr>
                <div id="tablaAsignacionesLoad"></div>
            </div>

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