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

function eliminarReporteCliente(idReporte){
    Swal.fire({
        title: "¿Estas seguro?",
        text: "Una vez eliminado no se podrá recuperar",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Eliminar"
    }).then((result)=>{
        if(result.isConfirmed){
            $.ajax({
                type:"POST",
                data:{idReporte:idReporte},
                url:"../procesos/reportesCliente/eliminarReporteCliente.php",
                success:function(respuesta){
                    respuesta = respuesta.trim();
                    if(respuesta == 1){
                        $('#tablaReporteClienteLoad').load('reportesCliente/tablaReporteCliente.php', function(){
                            $('#tablaReporteClienteDataTable').DataTable();
                        });
                        Swal.fire("Eliminado","","success");
                    }else{
                        Swal.fire("Error al eliminar "+respuesta,"","error");
                    }
                }
            });
        }
    });
    return false; 
}