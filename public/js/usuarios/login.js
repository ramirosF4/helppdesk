function loginUsuario(){
    $.ajax({
        type:"POST" ,
        data:$('#frmLogin').serialize(),
        url: "procesos/usuarios/login/loginUsuario.php",
        success:function(respuesta){
            respuesta = respuesta.trim();
            console.log(respuesta); 
            if (respuesta == 1) {
                window.location.href = "views/inicio.php"; 
            }else{
                Swal.fire(":(","error al entrar! "+ respuesta, "Error ")
                
            }
            
        }
    }); 
    return false; 
}   