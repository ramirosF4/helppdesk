<form id="frmActualizarUsuario" method="POST" onsubmit="return actualizarUsuario()">
  
  <div class="modal fade" id="modalActualizarUsuarios" tabindex="-1" aria-hidden="true">
    
    <div class="modal-dialog modal-lg modal-dialog-centered">
      
      <div class="modal-content border-0 shadow-lg rounded-4">

        
        <div class="modal-header bg-warning text-dark rounded-top">
          <h5 class="modal-title fw-bold">
            <i class="fas fa-user-edit me-2"></i> Actualizar usuario
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

    
        <div class="modal-body px-4 py-3">

          <input type="hidden" id="idUsuario" name="idUsuario">

          
          <div class="row g-3 mb-3">
            <div class="col-md-4">
              <label class="form-label fw-semibold">Apellido paterno</label>
              <input type="text" class="form-control rounded-3" id="paternou" name="paternou" required>
            </div>

            <div class="col-md-4">
              <label class="form-label fw-semibold">Apellido materno</label>
              <input type="text" class="form-control rounded-3" id="maternou" name="maternou" required>
            </div>

            <div class="col-md-4">
              <label class="form-label fw-semibold">Nombre</label>
              <input type="text" class="form-control rounded-3" id="nombreu" name="nombreu" required>
            </div>
          </div>

          <div class="row g-3 mb-3">
            <div class="col-md-4">
              <label class="form-label fw-semibold">Fecha de nacimiento</label>
              <input type="date" class="form-control rounded-3" id="fechaNacimientou" name="fechaNacimientou">
            </div>

            <div class="col-md-4">
              <label class="form-label fw-semibold">Sexo</label>
              <select class="form-select rounded-3" id="sexou" name="sexou" required>
                <option value="">Selecciona</option>
                <option value="F">Femenino</option>
                <option value="M">Masculino</option>
              </select>
            </div>

            <div class="col-md-4">
              <label class="form-label fw-semibold">Teléfono</label>
              <input type="text" class="form-control rounded-3" id="telefonou" name="telefonou">
            </div>
          </div>

          
          <div class="row g-3 mb-3">
            <div class="col-md-4">
              <label class="form-label fw-semibold">Correo</label>
              <input type="email" class="form-control rounded-3" id="correou" name="correou">
            </div>

            <div class="col-md-4">
              <label class="form-label fw-semibold">Usuario</label>
              <input type="text" class="form-control rounded-3" id="usuariou" name="usuariou">
            </div>
          </div>

    
          <div class="mb-3">
            <label class="form-label fw-semibold">Rol de usuario</label>
            <select name="idRolu" id="idRolu" class="form-select rounded-3">
              <option value="1">Cliente</option>
              <option value="2">Administrador</option>
            </select>
          </div>

    
          <div class="mb-2">
            <label class="form-label fw-semibold">Ubicación</label>
            <textarea name="ubicacionu" id="ubicacionu" class="form-control rounded-3" rows="2"></textarea>
          </div>

        </div>
        <div class="modal-footer border-0 px-4 pb-4">

          <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">
            Cancelar
          </button>

          <button class="btn btn-warning rounded-pill px-4 fw-semibold">
            <i class="fas fa-save me-1"></i> Actualizar
          </button>

        </div>

      </div>

    </div>

  </div>

</form>