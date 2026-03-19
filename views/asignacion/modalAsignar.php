<form id="frmAsignaEquipo" method="POST" onsubmit="return asignarEquipo()">

<div class="modal fade" id="modalAsignarEquipo" tabindex="-1" aria-hidden="true">
  
  <div class="modal-dialog modal-lg modal-dialog-centered">
    
    <div class="modal-content border-0 shadow-lg rounded-4">

      <div class="modal-header bg-primary text-white rounded-top">
        <h5 class="modal-title fw-bold">
          <i class="fas fa-laptop-medical me-2"></i> Asignar equipo
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>


      <div class="modal-body px-4 py-3">

        <div class="row g-3 mb-3">

          <div class="col-md-6">
            <label class="form-label fw-semibold">Nombre de la persona</label>

            <?php 
                $sql = "SELECT
                            persona.id_persona,
                            CONCAT(persona.paterno,' ',persona.materno,' ',persona.nombre) AS nombre
                        FROM 
                            t_persona AS persona 
                        INNER JOIN t_usuarios AS usuario 
                            ON persona.id_persona = usuario.id_persona 
                        AND usuario.id_rol = 1
                        ORDER BY persona.paterno";
                $respuesta = mysqli_query($conexion, $sql);
            ?>

            <select name="idPersona" id="idPersona" class="form-select rounded-3" required>
                <option value="">Selecciona una opción</option>
                <?php while($mostrar = mysqli_fetch_array($respuesta)){?>
                    <option value="<?php echo $mostrar['id_persona'];?>"><?php echo $mostrar['nombre'];?></option>
                <?php  } ?>
            </select>
          </div>

          <div class="col-md-6">
            <label class="form-label fw-semibold">Tipo de equipo</label>

            <?php   
                $sql = "SELECT id_equipo, nombre FROM t_cat_equipo ORDER BY nombre";
                $respuesta = mysqli_query($conexion, $sql); 
            ?>

            <select name="idEquipo" id="idEquipo" class="form-select rounded-3" required>
                <option value="">Selecciona una opción</option>
                <?php while ($mostrar = mysqli_fetch_array($respuesta)){?>
                    <option value="<?php echo $mostrar['id_equipo'];?>"><?php echo $mostrar['nombre'];?></option>
                <?php } ?>
            </select>
          </div>

        </div>


        <div class="row g-3 mb-3">

          <div class="col-md-4">
            <label class="form-label fw-semibold">Marca</label>
            <input type="text" name="marca" id="marca" class="form-control rounded-3">
          </div>

          <div class="col-md-4">
            <label class="form-label fw-semibold">Modelo</label>
            <input type="text" name="modelo" id="modelo" class="form-control rounded-3">
          </div>

          <div class="col-md-4">
            <label class="form-label fw-semibold">Color</label>
            <input type="text" name="color" id="color" class="form-control rounded-3">
          </div>

        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold">Descripción</label>
          <textarea name="descripcion" id="descripcion" class="form-control rounded-3" rows="2"></textarea>
        </div>

        <div class="row g-3">

          <div class="col-md-4">
            <label class="form-label fw-semibold">Memoria</label>
            <input type="text" class="form-control rounded-3" name="memoria" id="memoria">
          </div>

          <div class="col-md-4">
            <label class="form-label fw-semibold">Disco duro</label>
            <input type="text" class="form-control rounded-3" name="discoDuro" id="discoDuro">
          </div>

          <div class="col-md-4">
            <label class="form-label fw-semibold">Procesador</label>
            <input type="text" class="form-control rounded-3" name="procesador" id="procesador">
          </div>

        </div>

      </div>


      <div class="modal-footer border-0 px-4 pb-4">

        <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">
          Cancelar
        </button>

        <button class="btn btn-primary rounded-pill px-4 fw-semibold">
          <i class="fas fa-save me-1"></i> Asignar
        </button>

      </div>

    </div>

  </div>

</div>

</form>