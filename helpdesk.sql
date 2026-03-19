/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-11.8.3-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: helpdesk
-- ------------------------------------------------------
-- Server version	11.8.3-MariaDB-1build1 from Ubuntu

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Table structure for table `t_asignacion`
--

DROP TABLE IF EXISTS `t_asignacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_asignacion` (
  `id_asignacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `marca` varchar(245) DEFAULT NULL,
  `modelo` varchar(245) DEFAULT NULL,
  `color` varchar(245) DEFAULT NULL,
  `descripcion` varchar(245) DEFAULT NULL,
  `memoria` varchar(245) DEFAULT NULL,
  `disco_duro` varchar(245) DEFAULT NULL,
  `procesador` varchar(245) DEFAULT NULL,
  PRIMARY KEY (`id_asignacion`),
  KEY `fkequipoAsignacion_idx` (`id_equipo`),
  KEY `fkPersona_idx` (`id_persona`),
  CONSTRAINT `fkPersonaAsignacion` FOREIGN KEY (`id_persona`) REFERENCES `t_persona` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fkequipoAsignacion` FOREIGN KEY (`id_equipo`) REFERENCES `t_cat_equipo` (`id_equipo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_asignacion`
--

LOCK TABLES `t_asignacion` WRITE;
/*!40000 ALTER TABLE `t_asignacion` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `t_asignacion` VALUES
(9,1,1,'DELL','Optiplex','Gris','ES una pc slime y se puede poner el monitor sobre ella','4 gb','1 TB','Core i3'),
(10,1,2,'Acer','AET21','Rojo','El teclado esta en ingles y no tine ralladuras la maquina','8 gb','12 ssd',' Core i5 10500');
/*!40000 ALTER TABLE `t_asignacion` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `t_cat_equipo`
--

DROP TABLE IF EXISTS `t_cat_equipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_cat_equipo` (
  `id_equipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(245) NOT NULL,
  `descripcion` varchar(245) DEFAULT NULL,
  PRIMARY KEY (`id_equipo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_cat_equipo`
--

LOCK TABLES `t_cat_equipo` WRITE;
/*!40000 ALTER TABLE `t_cat_equipo` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `t_cat_equipo` VALUES
(1,'PC','fas fa-desktop'),
(2,'Laptop','fas fa-laptop'),
(3,'Mause',NULL),
(4,'Teclado',NULL),
(5,'Monitor',NULL),
(6,'Bocinas',NULL),
(7,'Microfono',NULL),
(8,'Proyector',NULL);
/*!40000 ALTER TABLE `t_cat_equipo` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `t_cat_roles`
--

DROP TABLE IF EXISTS `t_cat_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_cat_roles` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(245) NOT NULL,
  `descripcion` varchar(245) DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_cat_roles`
--

LOCK TABLES `t_cat_roles` WRITE;
/*!40000 ALTER TABLE `t_cat_roles` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `t_cat_roles` VALUES
(1,'cliente','Es un cliente'),
(2,'admin','Es Admin');
/*!40000 ALTER TABLE `t_cat_roles` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `t_persona`
--

DROP TABLE IF EXISTS `t_persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_persona` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `paterno` varchar(245) NOT NULL,
  `materno` varchar(245) DEFAULT NULL,
  `nombre` varchar(245) NOT NULL,
  `fecha_nacimiento` varchar(245) NOT NULL,
  `sexo` varchar(2) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `correo` varchar(245) DEFAULT NULL,
  `fecha_insert` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id_persona`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_persona`
--

LOCK TABLES `t_persona` WRITE;
/*!40000 ALTER TABLE `t_persona` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `t_persona` VALUES
(1,'Hernandez','Vazquez','Ramiro','2003-05-07','M','12345678','ramiro@gmail.com','2026-03-10 23:13:41'),
(2,'mendez','vasquez','irving','2005-02-11','M','5543121232','irving@gmail.com','2026-03-14 14:33:09'),
(3,'hernandez','martinez ','PEDRO','2000-01-01','M','1234567890','correo@gmail.com','2026-03-18 21:51:41'),
(4,'hernandez','vasquez','ramiro','2002-02-17','M','5543121232','correo@gmail.com','2026-03-18 21:58:51'),
(5,'demo','demo','ubuntu','2001-11-15','M','5544554455','correo@gmail.com','2026-03-18 21:59:54'),
(6,'hernandez','vasquez','nombre','2004-11-16','M','5543121232','correo@gmail.com','2026-03-18 22:24:20'),
(7,'hernandez','vasquez','nombre','2012-02-17','M','5543121232','correo@gmail.com','2026-03-18 22:31:38'),
(8,'hernandez','vasquez','nombre','2003-02-17','M','5543121232','correo@gmail.com','2026-03-18 22:39:42');
/*!40000 ALTER TABLE `t_persona` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `t_reportes`
--

DROP TABLE IF EXISTS `t_reportes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_reportes` (
  `id_reporte` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `id_usuario_tecnico` int(11) DEFAULT NULL,
  `descripcion_problema` text NOT NULL,
  `solucion_problema` text DEFAULT NULL,
  `estatus` int(11) NOT NULL DEFAULT 1,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_reporte`),
  KEY `fk_usuarioReporte_idx` (`id_usuario`),
  KEY `fkEquipoReporte_idx` (`id_equipo`),
  CONSTRAINT `fkEquipoReporte` FOREIGN KEY (`id_equipo`) REFERENCES `t_cat_equipo` (`id_equipo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarioReporte` FOREIGN KEY (`id_usuario`) REFERENCES `t_usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_reportes`
--

LOCK TABLES `t_reportes` WRITE;
/*!40000 ALTER TABLE `t_reportes` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `t_reportes` VALUES
(2,3,1,NULL,'La pc se apaga sola despues de unos minutos','Vamos a cambiar pasta termica y limpiar el equipo, el equipo se entrego exitosamente al cliente ',1,'2026-03-16 05:06:50'),
(3,3,1,NULL,'La pc se apaga sola despues de unos minutos',NULL,1,'2026-03-16 05:06:51');
/*!40000 ALTER TABLE `t_reportes` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `t_usuarios`
--

DROP TABLE IF EXISTS `t_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_rol` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `usuario` varchar(245) NOT NULL,
  `password` varchar(245) NOT NULL,
  `ubicacion` text DEFAULT NULL,
  `activo` int(11) NOT NULL DEFAULT 1,
  `fecha_insert` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_usuario`),
  KEY `fkPersona_idx` (`id_persona`),
  KEY `fkRoles_idx` (`id_rol`),
  CONSTRAINT `fkPersona` FOREIGN KEY (`id_persona`) REFERENCES `t_persona` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fkRoles` FOREIGN KEY (`id_rol`) REFERENCES `t_cat_roles` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_usuarios`
--

LOCK TABLES `t_usuarios` WRITE;
/*!40000 ALTER TABLE `t_usuarios` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `t_usuarios` VALUES
(3,1,1,'cliente','d94019fd760a71edf11844bb5c601a4de95aacaf','Modulo 1',1,'2026-03-11 18:02:43'),
(10,2,8,'admin','d033e22ae348aeb5660fc2140aec35850c4da997',NULL,1,'2026-03-19 04:39:42');
/*!40000 ALTER TABLE `t_usuarios` ENABLE KEYS */;
UNLOCK TABLES;
commit;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2026-03-19  1:03:11
