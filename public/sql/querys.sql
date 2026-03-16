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

SELECT
    persona.id_persona,
    CONCAT(persona.paterno,' ',persona.materno,' ',persona.nombre) AS nombrePersona
FROM 
    t_persona AS persona 
        INNER JOIN 
    t_usuarios AS usuario ON persona.id_persona = usuario.id_persona 
        AND usuario.id_rol = 1
ORDER BY persona.paterno





CREATE TABLE `t_asignacion` (
  `id_asignacion` INT NOT NULL AUTO_INCREMENT,
  `id_persona` INT NOT NULL,
  `id_equipo` INT NOT NULL,
  `marca` VARCHAR(245) NULL,
  `modelo` VARCHAR(245) NULL,
  `color` VARCHAR(245) NULL,
  `descripcion` VARCHAR(245) NULL,
  `memoria` VARCHAR(245) NULL,
  `disco_duro` VARCHAR(245) NULL,
  `procesador` VARCHAR(245) NULL,
  PRIMARY KEY (`id_asignacion`),
  INDEX `fkPersona_idx` (`id_persona` ASC),
  INDEX `fkEquipo_idx` (`id_equipo` ASC),
  CONSTRAINT `fkPersona`
    FOREIGN KEY (`id_persona`)
    REFERENCES `t_persona` (`id_persona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fkEquipo`
    FOREIGN KEY (`id_equipo`)
    REFERENCES `t_cat_equipo` (`id_equipo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);



CREATE TABLE `t_asignacion` (
  `id_asignacion` INT NOT NULL AUTO_INCREMENT,
  `id_persona` INT NOT NULL,
  `id_equipo` INT NOT NULL,
  `marca` VARCHAR(245) NULL,
  `modelo` VARCHAR(245) NULL,
  `color` VARCHAR(245) NULL,
  `descripcion` VARCHAR(245) NULL,
  `memoria` VARCHAR(245) NULL,
  `disco_duro` VARCHAR(245) NULL,
  `procesador` VARCHAR(245) NULL,
  PRIMARY KEY (`id_asignacion`));

ALTER TABLE `helpdesk`.`t_asignacion`
ADD INDEX `fkPersona_idx` (`id_persona` ASC);

ALTER TABLE `helpdesk`.`t_asignacion`
ADD CONSTRAINT `fkPersonaAsignacion`
FOREIGN KEY (`id_persona`)
REFERENCES `helpdesk`.`t_persona` (`id_persona`)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE `helpdesk`.`t_asignacion`
ADD INDEX `fkequipoAsignacion_idx` (`id_equipo` ASC);

ALTER TABLE `helpdesk`.`t_asignacion`
ADD CONSTRAINT `fkequipoAsignacion`
FOREIGN KEY (`id_equipo`)
REFERENCES `helpdesk`.`t_cat_equipo` (`id_equipo`)
ON DELETE NO ACTION
ON UPDATE NO ACTION;


	SELECT 
    persona.id_persona,
    CONCAT(persona.paterno,
            ' ',
            persona.materno,
            ' ',
            persona.nombre) AS nombrePersona,
    equipo.id_equipo AS idEquipo,
    equipo.nombre AS nombreEquipo,
    asignacion.id_asignacion AS idAsignacion,
    asignacion.marca,
    asignacion.modelo,
    asignacion.color,
    asignacion.descripcion,
    asignacion.memoria,
    asignacion.disco_duro,
    asignacion.procesador
FROM
    t_asignacion AS asignacion
        INNER JOIN
    t_persona AS persona ON asignacion.id_persona = persona.id_persona
        INNER JOIN
    t_cat_equipo AS equipo ON asignacion.id_equipo = equipo.id_equipo;