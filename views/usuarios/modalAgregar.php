<form id="frmAgregarUsuario" method="POST" onsubmit="return agregarNuevoUsuario()">
  
  <div class="modal fade" id="modalAgregarUsuarios" tabindex="-1" aria-hidden="true">
    
    <div class="modal-dialog modal-lg modal-dialog-centered">
      
      <div class="modal-content border-0 shadow-lg rounded-4">

        <div class="modal-header bg-primary text-white rounded-top">
          <h5 class="modal-title fw-bold">
            <i class="fas fa-user-plus me-2"></i> Agregar nuevo usuario
          </h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body px-4 py-3">

          <div class="row g-3 mb-3">
            <div class="col-md-4">
              <label class="form-label fw-semibold">Apellido paterno</label>
              <input type="text" class="form-control rounded-3" id="paterno" name="paterno" required>
            </div>

            <div class="col-md-4">
              <label class="form-label fw-semibold">Apellido materno</label>
              <input type="text" class="form-control rounded-3" id="materno" name="materno" required>
            </div>

            <div class="col-md-4">
              <label class="form-label fw-semibold">Nombre</label>
              <input type="text" class="form-control rounded-3" id="nombre" name="nombre" required>
            </div>
          </div>

            <div class="row g-3 mb-3">
            <div class="col-md-4">
              <label class="form-label fw-semibold">Fecha de nacimiento</label>
              <input type="date" class="form-control rounded-3" id="fechaNacimiento" name="fechaNacimiento">
            </div>

            <div class="col-md-4">
              <label class="form-label fw-semibold">Sexo</label>
              <select class="form-select rounded-3" id="sexo" name="sexo" required>
                <option value="">Selecciona</option>
                <option value="F">Femenino</option>
                <option value="M">Masculino</option>
              </select>
            </div>

            <div class="col-md-4">
              <label class="form-label fw-semibold">Teléfono</label>
              <input type="text" class="form-control rounded-3" id="telefono" name="telefono">
            </div>
          </div>
          <div class="row g-3 mb-3">
            <div class="col-md-4">
              <label class="form-label fw-semibold">Correo</label>
              <input type="email" class="form-control rounded-3" id="correo" name="correo">
            </div>

            <div class="col-md-4">
              <label class="form-label fw-semibold">Usuario</label>
              <input type="text" class="form-control rounded-3" id="usuario" name="usuario">
            </div>

            <div class="col-md-4">
              <label class="form-label fw-semibold">Contraseña</label>
              <input type="text" class="form-control rounded-3" id="password" name="password">
            </div>
          </div>


          <div class="mb-3">
            <label class="form-label fw-semibold">Rol de usuario</label>
            <select name="idRol" id="idRol" class="form-select rounded-3">
              <option value="1">Cliente</option>
              <option value="2">Administrador</option>
            </select>
          </div>

          <div class="mb-2">
            <label class="form-label fw-semibold">Ubicación</label>
            <textarea name="ubicacion" id="ubicacion" class="form-control rounded-3" rows="2"></textarea>
          </div>

        </div>


        <div class="modal-footer border-0 px-4 pb-4">

          <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">
            Cancelar
          </button>

          <button class="btn btn-primary rounded-pill px-4 fw-semibold">
            <i class="fas fa-save me-1"></i> Agregar
          </button>

        </div>

      </div>

    </div>

  </div>

</form>