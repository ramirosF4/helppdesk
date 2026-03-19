
document.addEventListener("DOMContentLoaded", function () {

    if (typeof $ === "undefined") {
        console.error("jQuery no está cargado");
        return;
    }
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
            $('#idUsuario').val(respuesta['idUsuario']); 
            $('#paternou').val(respuesta['paterno']); 
            $('#maternou').val(respuesta['materno']); 
            $('#nombreu').val(respuesta['nombrePersona']); 
            $('#fechaNacimientou').val(respuesta['fechaNacimiento']); 
            $('#sexou ').val(respuesta['sexo']); 
            $('#telefonou').val(respuesta['telefono']); 
            $('#correou').val(respuesta['correo']); 
            $('#usuariou').val(respuesta['nombreUsuario']); 
            $('#idRolu').val(respuesta['idRol']); 
            $('#ubicacionu').val(respuesta['ubicacion']); 
        }
    });

}

function actualizarUsuario(){
    $.ajax ({
        type: "POST", 
        data:$('#frmActualizarUsuario').serialize(),
        url:"../procesos/usuarios/crud/actualizarUsuario.php" ,
        success: function(respuesta){
            respuesta = respuesta.trim();
            if(respuesta == 1 ){
                $('#modalActualizarUsuarios').modal('hide');
                $('#tablaUsuariosLoad').load("usuarios/tablaUsuarios.php"); 
                Swal.fire(":D", "Actualizado correctamente", "success"); 
            }else{
                Swal.fire(".(", "Error al actualizar agregar el usaurio!!" + respuesta, "error")
            }
        }
    });
    return false; 
}




function agregarIdUsuarioReset(idUsuario){
    $('#idUsuarioReset').val(idUsuario);
}   

function resetPassword(){

    $.ajax({
        type: "POST",
        data: $('#frmactualizarPassword').serialize(),
        url:"../procesos/usuarios/extras/resetPassword.php",
        success:function(respuesta){
            respuesta = respuesta.trim();
            if(respuesta == 1 ){
                $('#modalResetPassword').modal('hide');
                Swal.fire(":D", "Actualizado correctamente", "success"); 
            }else{
                Swal.fire(".(", "Error al actualizar la contraseña!!" + respuesta, "error")
            }
        }
    });
    return false; 
}

function cambioEstatusUsuario(idUsuario, estatus){
    $.ajax({
        type: "POST",
        data: {idUsuario:idUsuario, estatus:estatus},
        url: "../procesos/usuarios/extras/cambioEstatus.php",
        success: function(respuesta){
            respuesta = respuesta.trim();
            if(respuesta == 1 ){
                $('#tablaUsuariosLoad').load("usuarios/tablaUsuarios.php"); 
                Swal.fire(":D", "Cambio de estatus con exito", "success"); 
            }else{
                Swal.fire(".(", "Error al actualizar el estatus!!" + respuesta, "error")
            }
        }

    });
}