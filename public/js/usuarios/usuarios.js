
$(document).ready(function(){
    $('#tablaUsuariosLoad').load("usuarios/tablaUsuarios.php"); 
}); 
function agregarNuevoUsuario(){
    $.ajax({
        type: "POST",
        data: $('#frmAgregarUsuario').serialize(),
        url: "../procesos/usuarios/crud/agregarNuevoUsuario.php",
        success: function(respuesta){
            console.log(respuesta);
            
            respuesta = respuesta.trim();   
            if(respuesta == 1 ){
                $('#tablaUsuariosLoad').load("usuarios/tablaUsuarios.php"); 
                $('#frmAgregarUsuario')[0].reset();
                Swal.fire(":D", "Agregado correctamente", "success"); 
            }else{
                Swal.fire(".(", "Error al agregar agregar el usaurio" + respuesta, "error")
            }
        }
    });
    return false; 
}

function obtenerDatosUsuario(idUsuario){
    $.ajax({
        type: "POST",
        data: { idUsuario: idUsuario },
        url: "../procesos/usuarios/crud/obtenerDatosUsuario.php",
        success: function(respuesta){
            respuesta = JSON.parse(respuesta);
            console.log(respuesta);
        }
    });

}