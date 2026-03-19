<?php 
include "header.php"; 
if(isset($_SESSION['usuario']) && $_SESSION['usuario']['rol'] == 2){
?>

<div class="container mt-4">

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <div class="d-flex justify-content-between align-items-center mb-4">

                <div>
                    <h4 class="fw-bold text-primary mb-0">
                        <i class="fas fa-users me-2"></i> Administrar usuarios
                    </h4>
                    <small class="text-muted">Gestiona los usuarios del sistema</small>
                </div>

                <button class="btn btn-primary rounded-pill px-4"
                        data-bs-toggle="modal"
                        data-bs-target="#modalAgregarUsuarios">
                    <i class="fas fa-user-plus me-1"></i> Nuevo
                </button>

            </div>

            <hr>

            <div id="tablaUsuariosLoad"></div>

        </div>
    </div>

</div>

<script src="http://localhost/helppdesk/public/js/usuarios/usuarios.js"></script>

<?php 
include "usuarios/modalAgregar.php"; 
include "usuarios/modalActualizar.php"; 
include "usuarios/modalResetPassword.php";
include "footer.php"; 
?> 

<?php
}else {
    header("location:../index.html"); 
}
?>