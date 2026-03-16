
<!-- Modal -->
<form id="frmNuevoReporte" method="POST" onsubmit="return agregarNuevoReporte();">
    <div class="modal fade" id="modalCrearReporte" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo reporte</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="idEquipo">Mis dispositivos</label>
                <select name="idEquipo" id="idEquipo" class="form-control" required>
                    <option value="">Selecciona un dispositivo</option>
                </select>
                <label for="problema">Describe tu problema</label>
                <textarea name="problema" id="" class="form-control" required></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button class="btn btn-primary">Crear</button>
            </div>
            </div>
        </div>
    </div>
</form>