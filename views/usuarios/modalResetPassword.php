<form id="frmactualizarPassword" onsubmit="return resetPassword()" method="POST">
  <div class="modal fade" id="modalResetPassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
    <div class="modal-dialog modal-dialog-centered">
      
      <div class="modal-content border-0 shadow-lg rounded-3">

        <!-- HEADER -->
        <div class="modal-header bg-warning text-dark rounded-top">
          <h5 class="modal-title fw-bold">
            <i class="fas fa-key me-2"></i> Resetear contraseña
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- BODY -->
        <div class="modal-body px-4 py-3">

          <input type="hidden" id="idUsuarioReset" name="idUsuarioReset">

          <div class="mb-3">
            <label class="form-label fw-semibold">Nueva contraseña</label>
            
            <input type="text" 
                   id="passwordReset" 
                   name="passwordReset"  
                   class="form-control form-control-lg rounded-3" 
                   placeholder="Escribe la nueva contraseña"
                   required>
          </div>

          <small class="text-muted">
            Asegúrate de usar una contraseña segura.
          </small>

        </div>

        <!-- FOOTER -->
        <div class="modal-footer border-0 px-4 pb-4">

          <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">
            Cancelar
          </button>

          <button class="btn btn-warning rounded-pill px-4 fw-semibold">
            <i class="fas fa-sync-alt me-1"></i> Cambiar
          </button>

        </div>

      </div>

    </div>

  </div>
</form>