$(document).ready(function(){
    $('#tablaReporteClienteLoad').load('reportesCliente/tablaReporteCliente.php');

}); 

function agregarNuevoReporte(){
    $.ajax({
        type: "POST",
        data: $('#frmNuevoReporte').serialize(),
        url: "../procesos/reportesCliente/agregarNuevoReporte.php",
        success: function(respuesta){
            respuesta = respuesta.trim();
            if(respuesta == 1){
                $('#tablaReporteClienteLoad').load('reportesCliente/tablaReporteCliente.php');
                $('#frmNuevoReporte')[0].reset();
                Swal.fire(":D", "Reporte agregado correctamente", "success");
            }else{
                Swal.fire(":(", "Error al agregar el reporte " + respuesta, "error");
            }
        }
    });
    return false;
}