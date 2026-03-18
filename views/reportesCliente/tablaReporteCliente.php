<?php 
    session_start();
    include "../../clases/Conexion.php"; 
    $con = new Conexion();
    $conexion = $con->conectar();
    $idUsuario = $_SESSION['usuario']['id'];
    $contador = 1; 

    $sql =" SELECT 
                reporte.id_reporte AS idReporte,
                reporte.id_usuario AS idUsuario,
                CONCAT(persona.paterno,' ',persona.materno,' ',persona.nombre) AS nombrePersona,
                equipo.id_equipo AS idEquipo,
                equipo.nombre AS nombreEquipo,
                reporte.descripcion_problema AS problema,
                reporte.estatus AS estatus,
                reporte.solucion_problema AS solucion,
                reporte.fecha as fecha
            FROM
                t_reportes AS reporte
            INNER JOIN t_usuarios AS usuario 
                ON reporte.id_usuario = usuario.id_usuario
            INNER JOIN t_persona AS persona 
                ON usuario.id_persona = persona.id_persona
            INNER JOIN t_cat_equipo AS equipo 
                ON reporte.id_equipo = equipo.id_equipo
            AND reporte.id_usuario = '$idUsuario'
            ORDER BY reporte.fecha DESC";

    $respuesta = mysqli_query($conexion, $sql);
?>

<div class="table-responsive">

    <table class="table table-sm table-bordered table-striped" id="tablaReportesClienteDataTable" style="width:100%">
    <thead>
        <tr>
        <th>#</th>
        <th>Persona</th>
        <th>Dispositivo</th>
        <th>Fecha</th>
        <th>Descripcion</th>
        <th>Estatus</th>
        <th>Solucion</th>
        <th>Eliminar</th>
        </tr>
    </thead>

    <tbody>

    <?php while($mostrar = mysqli_fetch_array($respuesta)){ ?>

    <tr>

    <td><?php echo $contador++ ?></td>

    <td><?php echo $mostrar['nombrePersona']; ?></td>

    <td><?php echo $mostrar['nombreEquipo']; ?></td>

    <td><?php echo $mostrar['fecha'] ?></td>

    <td><?php echo $mostrar['problema'] ?></td>

    <td>
    <?php 
    $estatus = $mostrar['estatus'];

    if ($estatus == 1) {
        echo '<span class="badge bg-success">Abierto</span>';
    } else {
        echo '<span class="badge bg-danger">Cerrado</span>';
    }
    ?>
    </td>

    <td>
    <?php echo $mostrar['solucion'] == "" ? "-" : $mostrar['solucion']; ?>
    </td>

    <td>

    <?php 
    if ($mostrar['solucion'] == "") {
    ?>

    <button class="btn btn-danger btn-sm"
    onclick="eliminarReporteAdmin(<?php echo $mostrar['idReporte'] ?>)">
    <span class="fas fa-trash-alt"></span> Eliminar
    </button>

    <?php
    } else {
    echo "-";
    }
    ?>

    </td>

    </tr>

    <?php } ?>

    </tbody>

    </table>

</div>

<script>

$(document).ready(function(){

    $('#tablaReportesClienteDataTable').DataTable({
        responsive:true,
        scrollX:true,
        autoWidth:false,
        language:{
            lengthMenu:"Mostrar _MENU_ registros",
            zeroRecords:"No se encontraron resultados",
            info:"Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            infoEmpty:"Mostrando registros del 0 al 0 de un total de 0 registros",
            infoFiltered:"(filtrado de un total de _MAX_ registros)",
            sSearch:"Buscar:",
            oPaginate:{
                sFirst:"Primero",
                sLast:"Último",
                sNext:"Siguiente",
                sPrevious:"Anterior"
            }
        },
                    dom: 'Bfrtip',
                    buttons: {
                        buttons: [
                            {
                                extend: 'copy', 
                                className: 'btn btn-outline-info',
                                text : '<span class="far fa-copy"></></span> Copiar'

                            },
                            {
                                extend: 'csv', 
                                className: 'btn btn-outline-secondary',
                                text : '<span class="fas fa-file-csv"></span> CSV'

                            },
                            {
                                extend: 'excel', 
                                className: 'btn btn-outline-success',
                                text : '<span class="far fa-file-excel"></span> XLS'

                            },
                            {
                                extend: 'pdf', 
                                className: 'btn btn-outline-danger',
                                text : '<span class="far fa-file-pdf"></span> PDF'

                            },
                        ]

                    }

    });

});

</script>