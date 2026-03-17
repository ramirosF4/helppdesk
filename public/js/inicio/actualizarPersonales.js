 function actualizarDatosPersonales(){
    $.ajax({

        type:"POST", 
        data:('#').serialize(),
        url: "../procesos/inicio/actualizarPersonales.php",
        success:function(respuesta){
             respuesta = respuesta.trim();
            if(respuesta ==1 ){ 
                /* $('#modalAsignarEquipo').modal('hide'); */
                Swal.fire("(:", "Actualizado con exito", "success");
            }else{
                Swal.fire(":)", "Fallo al actualizar al asignar!"+respuesta, "error");
            }
        }
    });
    return false; 
 }