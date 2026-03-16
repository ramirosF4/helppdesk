$(document).ready (function(){
    $('#tablaAsignacionesLoad').load('asignacion/tablaAsignacion.php');
});


function asignarEquipo(){
    $.ajax({
        type:"POST",
        data: $('#frmAsignaEquipo').serialize(),
        url:"../procesos/asignacion/asignar.php" ,
        success: function(respuesta){
            respuesta = respuesta.trim();
            if(respuesta ==1 ){
                $('#frmAsignaEquipo')[0].reset();
                $('#tablaAsignacionesLoad').load('asignacion/tablaAsignacion.php');
                /* $('#modalAsignarEquipo').modal('hide'); */
                Swal.fire("(:", "Asignado con exito", "success");
            }else{
                Swal.fire(":)", "Error al asignar!"+respuesta, "error");
            }
        }
    });
    return false; 
}

function eliminarAsignacion(idAsignacion){

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
                data:{idAsignacion:idAsignacion},
                url:"../procesos/asignacion/eliminarAsignacion.php",
                success:function(respuesta){
                    respuesta = respuesta.trim();
                    if(respuesta == 1){
                        $('#tablaAsignacionesLoad').load("asignacion/tablaAsignacion.php", function(){
                            $('#tablaAsignacionDataTable').DataTable();
                        });
                        Swal.fire("Eliminado","","success");
                    }else{
                        Swal.fire("Error al eliminar "+respuesta,"","error");
                    }
                }
            });
        }
    });

}


