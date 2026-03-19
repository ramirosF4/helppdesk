<form id="frmActualizarDatosPersonales" method="POST" onsubmit="return actualizarDatosPersonales()">
        
    <div class="modal fade" id="modalActualizarDatosPersonales" tabindex="-1" aria-hidden="true">
        
        <div class="modal-dialog modal-dialog-centered">
            
            <div class="modal-content border-0 shadow-lg rounded-4">

                <div class="modal-header bg-warning text-dark rounded-top">
                    <h5 class="modal-title fw-bold">
                        <i class="fas fa-user-edit me-2"></i> Actualizar datos personales
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body px-4 py-3">

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Apellido paterno</label>
                        <input type="text" class="form-control rounded-3" id="paternoInicio" name="paternoInicio">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Apellido materno</label>
                        <input type="text" class="form-control rounded-3" id="maternoInicio" name="maternoInicio">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nombre</label>
                        <input type="text" class="form-control rounded-3" id="nombreInicio" name="nombreInicio">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Teléfono</label>
                        <input type="text" class="form-control rounded-3" id="telefonoInicio" name="telefonoInicio">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Correo</label>
                        <input type="email" class="form-control rounded-3" id="correoInicio" name="correoInicio">
                    </div>

                    <div class="mb-2">
                        <label class="form-label fw-semibold">Fecha de nacimiento</label>
                        <input type="date" class="form-control rounded-3" id="fechaNaInicio" name="fechaNaInicio">  
                    </div>

                </div>

            
                <div class="modal-footer border-0 px-4 pb-4">

                    <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">
                        Cancelar
                    </button>

                    <button class="btn btn-warning rounded-pill px-4 fw-semibold">
                        <i class="fas fa-save me-1"></i> Guardar cambios
                    </button>

                </div>

            </div>

        </div>

    </div>

</form>