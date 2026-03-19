<?php 
include "header.php"; 
if(isset($_SESSION['usuario']) && $_SESSION['usuario']['rol'] == 1 ){
include"../clases/Asignacion.php";
$con = new Conexion(); 
$conexion =$con->conectar();
$idUsuario = $_SESSION['usuario']['id'];

$sql = "SELECT 
            persona.id_persona AS idPersona
        FROM
            t_usuarios AS usuario
        INNER JOIN t_persona AS persona 
            ON usuario.id_persona = persona.id_persona
        AND usuario.id_usuario = '$idUsuario'";

$respuesta = mysqli_query($conexion, $sql);
$idPersona = mysqli_fetch_array($respuesta)[0];

$sql  = "SELECT 
            persona.id_persona AS idPersona,
            CONCAT(persona.paterno,' ',persona.materno,' ',persona.nombre) AS nombrePersona,
            equipo.id_equipo AS idEquipo,
            equipo.nombre AS nombreEquipo,
            asignacion.id_asignacion AS idAsignacion,
            asignacion.marca AS marca,
            asignacion.modelo AS modelo,
            asignacion.color AS color,
            asignacion.descripcion AS descripcion,
            asignacion.memoria AS memoria,
            asignacion.disco_duro AS discoDuro,
            asignacion.procesador AS procesador,
            equipo.descripcion AS imagen
        FROM
            t_asignacion AS asignacion
        INNER JOIN t_persona AS persona 
            ON asignacion.id_persona = persona.id_persona
        INNER JOIN t_cat_equipo AS equipo 
            ON asignacion.id_equipo = equipo.id_equipo
        AND asignacion.id_persona = '$idPersona'"; 

$respuesta = mysqli_query($conexion, $sql); 
?>

<div class="container mt-4">

    <div class="card shadow-sm border-0">

        <div class="card-body p-4">

            <!-- HEADER -->
            <div class="mb-4">
                <h4 class="fw-bold text-primary">
                    <i class="fas fa-laptop me-2"></i> Mis dispositivos
                </h4>
                <small class="text-muted">Consulta los equipos asignados a tu cuenta</small>
            </div>

            <hr>

            <div class="row g-4">

            <?php while ($mostrar = mysqli_fetch_array($respuesta)){?>

                <div class="col-md-4">

                    <div class="card border-0 shadow-sm h-100">

                        <div class="card-body">

                            <!-- TITULO -->
                            <h5 class="fw-bold mb-2">
                                <i class="<?php echo $mostrar['imagen']; ?> me-2 text-primary"></i>
                                <?php echo $mostrar['nombreEquipo'] ?>
                            </h5>

                            <!-- DESCRIPCION -->
                            <p class="text-muted small mb-3">
                                <?php echo $mostrar['descripcion'];?>
                            </p>

                            <!-- DETALLES -->
                            <ul class="list-group list-group-flush small">

                                <li class="list-group-item px-0">
                                    <strong>Marca:</strong> <?php echo $mostrar['marca'];?>
                                </li>

                                <li class="list-group-item px-0">
                                    <strong>Modelo:</strong> <?php echo $mostrar['modelo'];?>
                                </li>

                                <li class="list-group-item px-0">
                                    <strong>Color:</strong> <?php echo $mostrar['color'];?>
                                </li>

                                <li class="list-group-item px-0">
                                    <strong>Memoria:</strong> <?php echo $mostrar['memoria'];?>
                                </li>

                                <li class="list-group-item px-0">
                                    <strong>Disco duro:</strong> <?php echo $mostrar['discoDuro'];?>
                                </li>

                                <li class="list-group-item px-0">
                                    <strong>Procesador:</strong> <?php echo $mostrar['procesador'];?>
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            <?php }?>

            </div>

        </div>

    </div>

</div>

<?php 
include "footer.php"; 
}else{
    header("location:../index.html"); 
}
?>