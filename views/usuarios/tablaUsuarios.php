<?php   
include "../../clases/Conexion.php"; 
$con = new Conexion(); 
$conexion = $con->conectar(); 

$sql = " SELECT 
              usuarios.id_usuario AS idUsuario,
              usuarios.usuario AS nombreUsuario,
              roles.nombre AS rol,
              usuarios.id_rol AS idRol,
              usuarios.ubicacion AS ubicacion,
              usuarios.activo AS estatus,
              usuarios.id_persona AS idPersona,
              persona.nombre AS nombrePersona,
              persona.paterno AS paterno,
              persona.materno AS materno,
              persona.fecha_nacimiento fechaNacimiento,
              persona.sexo AS sexo,
              persona.correo AS correo,
              persona.telefono AS telefono
        FROM
              t_usuarios AS usuarios 
              INNER JOIN 
              t_cat_roles AS roles ON usuarios.id_rol = roles.id_rol 
              INNER JOIN 
              t_persona AS persona ON usuarios.id_persona = persona.id_persona ";

$respuesta = mysqli_query($conexion , $sql); 
?>

<div class="card shadow-sm border-0">
  <div class="card-body">

    <h5 class="mb-4 fw-bold text-primary">
      <i class="fas fa-users me-2"></i> Gestión de usuarios
    </h5>

    <div class="table-responsive">

      <table class="table table-hover align-middle text-center" id="tablaUsuariosDataTable" style="width:100%">

        <thead class="table-dark">
          <tr>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Ubicación</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Usuario</th>
            <th>Sexo</th>
            <th>Reset</th>
            <th>Estatus</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>

        <tbody>
          <?php 
          while ($mostrar = mysqli_fetch_array($respuesta)){
          ?>
          <tr>
            <td><?php echo $mostrar['paterno'];?></td>
            <td><?php echo $mostrar['materno'];?></td>
            <td class="fw-semibold"><?php echo $mostrar['nombrePersona'];?></td>
            <td><?php echo $mostrar['fechaNacimiento'];?></td>
            <td><?php echo $mostrar['ubicacion'];?></td>
            <td><?php echo $mostrar['telefono'];?></td>
            <td class="text-muted"><?php echo $mostrar['correo'];?></td>
            <td><?php echo $mostrar['nombreUsuario'];?></td>
            <td><?php echo $mostrar['sexo'];?></td>

            <td>
              <button class="btn btn-outline-info btn-sm rounded-pill"
                      data-bs-toggle="modal"
                      data-bs-target="#modalResetPassword"
                      onclick="agregarIdUsuarioReset(<?php echo $mostrar['idUsuario']?>)">
                <span class="fas fa-key"></span>
              </button>
            </td>

            <td>
              <?php if($mostrar['estatus'] == 1){ ?>
                <button class="btn btn-outline-secondary btn-sm rounded-pill"
                        onclick="cambioEstatusUsuario(<?php echo $mostrar['idUsuario']?>,<?php echo $mostrar['estatus']?>)">
                  <span class="fas fa-toggle-off"></span>
                </button>
              <?php } else { ?>
                <button class="btn btn-outline-success btn-sm rounded-pill"
                        onclick="cambioEstatusUsuario(<?php echo $mostrar['idUsuario']?>,<?php echo $mostrar['estatus']?>)">
                  <span class="fas fa-toggle-on"></span>
                </button>
              <?php } ?>
            </td>

            <td>
              <button class="btn btn-outline-warning btn-sm rounded-pill"
                      data-bs-toggle="modal"
                      data-bs-target="#modalActualizarUsuarios"
                      onclick="obtenerDatosUsuario(<?php echo $mostrar['idUsuario']?>)">
                <span class="fas fa-edit"></span>
              </button>
            </td>

            <td>
              <?php if($mostrar['idRol'] != 0){ ?>
                <button class="btn btn-outline-danger btn-sm rounded-pill"
                        onclick="eliminarUsuario(<?php echo $mostrar['idUsuario']?>,<?php echo $mostrar['idPersona']?>)">
                  <span class="fas fa-trash"></span>
                </button>
              <?php } ?>
            </td>

          </tr>
          <?php } ?>
        </tbody>

      </table>
    </div>
  </div>
</div>

