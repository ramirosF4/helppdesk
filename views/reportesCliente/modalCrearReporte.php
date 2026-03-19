<form id="frmNuevoReporte" method="POST" onsubmit="return agregarNuevoReporte();">
    
    <div class="modal fade" id="modalCrearReporte" tabindex="-1" aria-hidden="true">
        
        <div class="modal-dialog modal-dialog-centered">
            
            <div class="modal-content border-0 shadow-lg rounded-4">

          
                <div class="modal-header bg-primary text-white rounded-top">
                    <h5 class="modal-title fw-bold">
                        <i class="fas fa-file-alt me-2"></i> Nuevo reporte
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

        
                <div class="modal-body px-4 py-3">

            
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Mis dispositivos</label>

                        <?php 
                        $idUsuario = $_SESSION ['usuario']['id'];
                        $sql = "SELECT 
                                    asignacion.id_asignacion as idAsignacion, 
                                    equipo.id_equipo as idEquipo, 
                                    equipo.nombre as nombreEquipo
                                FROM
                                    t_asignacion AS asignacion
                                        INNER JOIN
                                    t_cat_equipo AS equipo ON asignacion.id_equipo = equipo.id_equipo
                                WHERE
                                    asignacion.id_persona = (SELECT 
                                            id_persona
                                        FROM
                                            t_usuarios
                                        WHERE
                                            id_usuario = '$idUsuario')"; 
                        $respuesta = mysqli_query($conexion, $sql);
                        ?>

                        <select name="idEquipo" id="idEquipo" class="form-select rounded-3" required>
                            <option value="">Selecciona un dispositivo</option>
                            <?php while($mostrar = mysqli_fetch_array($respuesta)){ ?>
                            <option value="<?php echo $mostrar['idEquipo'] ?>">
                                <?php echo $mostrar['nombreEquipo']?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-2">
                        <label class="form-label fw-semibold">Describe tu problema</label>
                        <textarea name="problema" 
                                  id="problema" 
                                  class="form-control rounded-3" 
                                  rows="3"
                                  placeholder="Describe detalladamente el problema..."
                                  required></textarea>
                    </div>

                </div>

                <div class="modal-footer border-0 px-4 pb-4">

                    <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">
                        Cancelar
                    </button>

                    <button type="submit" class="btn btn-primary rounded-pill px-4 fw-semibold">
                        <i class="fas fa-plus me-1"></i> Crear
                    </button>

                </div>

            </div>

        </div>

    </div>

</form>