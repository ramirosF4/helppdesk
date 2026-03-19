<?php
include "../../clases/Conexion.php";
$con = new Conexion(); 
$conexion = $con->conectar(); 

$sql = "SELECT 
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
            asignacion.procesador AS procesador
        FROM
            t_asignacion AS asignacion
        INNER JOIN t_persona AS persona 
            ON asignacion.id_persona = persona.id_persona
        INNER JOIN t_cat_equipo AS equipo 
            ON asignacion.id_equipo = equipo.id_equipo;";

$respuesta = mysqli_query($conexion,$sql);
?>

<div class="card shadow-sm border-0">
  <div class="card-body">

    <h5 class="mb-4 fw-bold text-primary">
      <i class="fas fa-laptop me-2"></i> Asignación de equipos
    </h5>

    <div class="table-responsive">

      <table class="table table-hover align-middle text-center" id="tablaAsignacionDataTable" style="width:100%">

        <thead class="table-dark">
          <tr>
            <th>Persona</th>
            <th>Equipo</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Color</th>
            <th>Descripción</th>
            <th>Memoria</th>
            <th>Disco duro</th>
            <th>Procesador</th>
            <th>Eliminar</th>
          </tr>
        </thead>

        <tbody>
          <?php while($mostrar = mysqli_fetch_array($respuesta)){ ?>
          <tr>

            <td class="fw-semibold"><?php echo $mostrar['nombrePersona']?></td>

            <td>
              <span class="badge bg-light text-dark border">
                <?php echo $mostrar['nombreEquipo']?>
              </span>
            </td>

            <td><?php echo $mostrar['marca']?></td>
            <td><?php echo $mostrar['modelo']?></td>
            <td><?php echo $mostrar['color']?></td>

            <td class="text-start"><?php echo $mostrar['descripcion']?></td>

            <td><?php echo $mostrar['memoria']?></td>
            <td><?php echo $mostrar['discoDuro']?></td>
            <td><?php echo $mostrar['procesador']?></td>

            <td>
              <button class="btn btn-outline-danger btn-sm rounded-pill"
                      onclick="eliminarAsignacion(<?php echo $mostrar['idAsignacion']?>)">
                <i class="fas fa-trash-alt"></i>
              </button>
            </td>

          </tr>
          <?php } ?>
        </tbody>

      </table>

    </div>
  </div>
</div>

<script>
$(document).ready(function(){
    $('#tablaAsignacionDataTable').DataTable({
        language :{
            url : "../public/datatable/es_es.json"
        },
        dom: '<"row mb-3"<"col-md-6 d-flex gap-2 flex-wrap"B><"col-md-6 text-end"f>>rtip'
    }); 
});
</script>