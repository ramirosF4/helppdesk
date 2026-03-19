<?php 
include "header.php"; 
if(isset($_SESSION['usuario']) && ($_SESSION['usuario']['rol'] == 1 || $_SESSION['usuario']['rol'] == 2)){
$idUsuario = $_SESSION['usuario']['id'];
?>

<!-- CONTENIDO -->
<div class="container mt-4">

    <div class="card shadow-sm border-0">

        <div class="card-body p-4">

            <!-- HEADER -->
            <div class="mb-4">
                <h4 class="fw-bold text-primary">
                    <i class="fas fa-home me-2"></i> Bienvenido, <?php echo $_SESSION['usuario']['nombre'];?>
                </h4>
                <small class="text-muted">Aquí puedes ver tu información personal</small>
            </div>

            <hr>

            <!-- DATOS -->
            <div class="row g-3">

                <div class="col-md-4">
                    <div class="p-3 bg-light rounded-3 shadow-sm">
                        <small class="text-muted">Apellido paterno</small>
                        <div class="fw-semibold" id="paterno"></div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-3 bg-light rounded-3 shadow-sm">
                        <small class="text-muted">Apellido materno</small>
                        <div class="fw-semibold" id="materno"></div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-3 bg-light rounded-3 shadow-sm">
                        <small class="text-muted">Nombre</small>
                        <div class="fw-semibold" id="nombre"></div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-3 bg-light rounded-3 shadow-sm">
                        <small class="text-muted">
                            <i class="fas fa-phone me-1"></i> Teléfono
                        </small>
                        <div class="fw-semibold" id="telefono"></div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-3 bg-light rounded-3 shadow-sm">
                        <small class="text-muted">
                            <i class="far fa-envelope me-1"></i> Correo
                        </small>
                        <div class="fw-semibold" id="correo"></div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-3 bg-light rounded-3 shadow-sm">
                        <small class="text-muted">Edad</small>
                        <div class="fw-semibold" id="edad"></div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

<?php 
include "footer.php"; 
?>

<script src="../public/js/inicio/personales.js"></script>

<script>
let idUsuario = '<?php echo $idUsuario; ?>'
datosPersonalesInicio(idUsuario)
</script>

<?php
}else{
    header("location:../index.html"); 
}
?>