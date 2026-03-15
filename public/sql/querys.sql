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




CREATE TABLE `t_cat_equipo`(
    `id_equipo` INT NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR (245) NOT NULL,
    `descripcion` VARCHAR (245) NULL, 
    PRIMARY KEY(`id_equipo`));



INSERT INTO t_cat_equipo (nombre) 
VALUES 
("PC"),
("Laptop"),
("Mause"),
("Teclado"),
("Monitor"),
("Bocinas"),
("Microfono"),
("Proyector");




SELECT
    id_persona,
    concat(paterno," ",materno," ", nombre) AS nombre
FROM t_persona;


SELECT 

id_equipo, nombre  

FROM t_cat_equipo; 