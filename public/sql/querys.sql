SELECT 
    persona.id_persona AS  idPersona
FROM 
    t_usuarios AS usuarios 
        INNER JOIN 
        t_persona AS persona ON usuarios.id_persona = persona.id_persona 
        AND usuarios.id_usuario = 1; 
    




UPDATE t_usuarios SET id_rol = ? 
                      usuario = ?, 
                      ubicacion = ?