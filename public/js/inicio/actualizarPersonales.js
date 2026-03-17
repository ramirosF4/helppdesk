 function actualizarDatosPersonales(){
    $.ajax({
        type:"POST", 
        data:$('#frmActualizarDatosPersonales').serialize(),
        url: "../procesos/inicio/actualizarPersonales.php",
        success:function(respuesta){
             respuesta = respuesta.trim();
            if(respuesta ==1 ){ 
                /* $('#modalAsignarEquipo').modal('hide'); */
                Swal.fire("(:", "Actualizado con exito", "success");
                location.reload();
            }else{
                Swal.fire(":)", "Fallo al actualizar al asignar!"+respuesta, "error");
            }
        }
    });
    return false; 
 }

function obtenerDatosPersonalesInicio(idUsuario){
    $.ajax({
        type: "POST",
        data: {idUsuario:idUsuario},
        url: "../procesos/usuarios/crud/obtenerDatosUsuario.php",
        success:function(respuesta){
            respuesta = JSON.parse(respuesta);
            $('#paternoInicio').val(respuesta['paterno']);
            $('#maternoInicio').val(respuesta['materno']);
            $('#nombreInicio').val(respuesta['nombrePersona']);
            $('#telefonoInicio').val(respuesta['telefono']);
            $('#correoInicio').val(respuesta['correo']);
            $('#fechaNaInicio').val(respuesta['fechaNacimiento']);
        }
    });
} 