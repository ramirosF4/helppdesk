<?php
/* 
    modalActualizarDatosPersonales */
?>

<form id="frmActualizarDatosPersonales" method="POST" onsubmit="return actualizarDatosPersonales()">
        <!-- Modal -->
    <div class="modal fade" id="modalActualizarDatosPersonales" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Actualizar datos personales</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <label for="paternoInicio">Apellido paterno</label>
            <input type="text" class="form-control" id="paternoInicio" name="paternoInicio">
            <label for="maternoInicio">Apellido materno</label>
            <input type="text" class="form-control" id="maternoInicio" name="maternoInicio">
            <label for="nombreInicio">Nombre</label>
            <input type="text" class="form-control" id="nombreInicio" name="nombreInicio">
            <label for="telefonoInicio">Telefono</label>
            <input type="text" class="form-control" id="telefonoInicio" name="telefonoInicio">
            <label for="correoInicio">Correo</label>
            <input type="mail" class="form-control" id="correoInicio" name="correoInicio">
            <label for="fechaNaInicio">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="fechaNaInicio" name="fechaNaInicio">  
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button  class="btn btn-warning">Guardar cambios</button>
        </div>
        </div>
    </div>
    </div>
</form>
