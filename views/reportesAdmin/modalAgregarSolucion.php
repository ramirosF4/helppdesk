<form id="frmAgregarSolucionReporte" method="POST" onsubmit="return agregarSolucionReporte()"> 
    
    <div class="modal fade" id="modalAgregarSolucionReporte" tabindex="-1" aria-hidden="true">
        
        <div class="modal-dialog modal-dialog-centered">
            
            <div class="modal-content border-0 shadow-lg rounded-4">

        
                <div class="modal-header bg-success text-white rounded-top">
                    <h5 class="modal-title fw-bold">
                        <i class="fas fa-tools me-2"></i> Registrar solución
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>


                <div class="modal-body px-4 py-3">

                    <input type="hidden" id="idReporte" name="idReporte">

                    
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Descripción de la solución</label>
                        <textarea name="solucion" 
                                  id="solucion" 
                                  class="form-control rounded-3" 
                                  rows="3"
                                  placeholder="Describe la solución aplicada..."
                                  required></textarea>
                    </div>

                
                    <div class="mb-2">
                        <label class="form-label fw-semibold">Estatus</label>
                        <select name="estatus" id="estatus" class="form-select rounded-3">
                            <option value="1">Abierto</option>
                            <option value="0">Cerrado</option>
                        </select>
                    </div>

                </div>

        
                <div class="modal-footer border-0 px-4 pb-4">

                    <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">
                        Cancelar
                    </button>

                    <button class="btn btn-success rounded-pill px-4 fw-semibold">
                        <i class="fas fa-save me-1"></i> Guardar
                    </button>

                </div>

            </div>

        </div>

    </div>

</form>