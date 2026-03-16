function asignarEquipo(){
    $.ajax({
        type:"POST",
        data: $('#frmAsignaEquipo').serialize(),
        url:"../procesos/asignacion/asignar.php" ,
        success: function(respuesta){
            respuesta = respuesta.trim();
            if(respuesta ==1 ){
                $('#frmAsignaEquipo')[0].reset();
                $('#modalAsignarEquipo').modal('hide');
                Swal.fire("(:", "Asignado con exito", "success");
            }else{
                Swal.fire(":)", "Error al asignar!"+respuesta, "error");
            }
        }
    });
    return false; 
}
